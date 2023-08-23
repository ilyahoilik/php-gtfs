<?php

namespace GTFS\Static;

use GTFS\Static\Exceptions\NotWriteableDirectoryException;
use GTFS\Static\Exceptions\InvalidResourceException;

class File
{
    /** @var resource */
    protected $resource;

    /**
     * @throws NotWriteableDirectoryException
     * @throws InvalidResourceException
     */
    public function __construct(
        protected string $directory,
        protected string $filename
    ) {
        $this->resource = $this->openOrCreateFile();
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function getResource(): mixed
    {
        return $this->resource;
    }

    public function getFilepath(): string
    {
        return $this->getDirectory() . '/' . $this->getFilename();
    }

    /**
     * @return resource
     * @throws NotWriteableDirectoryException
     * @throws InvalidResourceException
     */
    protected function openOrCreateFile(): mixed
    {
        $this->createFileIfNotExist();

        return $this->safelyOpenFile();
    }

    /**
     * @throws NotWriteableDirectoryException
     */
    protected function createFileIfNotExist(): void
    {
        if (! file_exists($this->getFilepath())) {
            if (! is_writable($this->getDirectory())) {
                throw new NotWriteableDirectoryException($this->getDirectory());
            }

            file_put_contents($this->getFilepath(), '');
        }
    }

    /**
     * @return resource
     * @throws InvalidResourceException
     */
    protected function safelyOpenFile(): mixed
    {
        $file = @fopen($this->getFilepath(), 'r');

        if ($file === false) throw new InvalidResourceException(
            $this->getFilepath()
        );

        // Remove BOM markers
        if (fgets($file, 4) !== "\xef\xbb\xbf") {
            rewind($file);
        }

        return $file;
    }
}