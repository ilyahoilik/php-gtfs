<?php

namespace GTFS\Static;

use Generator;
use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Exceptions\InvalidResourceException;
use GTFS\Static\Exceptions\NotWriteableDirectoryException;

class Dataset
{
    protected File $file;

    /**
     * @throws NotWriteableDirectoryException
     * @throws InvalidResourceException
     */
    public function __construct(
        protected string $directory,
        protected DatasetType $datasetType
    ) {
        $this->file = new File(
            $this->getDirectory(),
            $this->getDatasetType()->getFilename()
        );
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getDatasetType(): DatasetType
    {
        return $this->datasetType;
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function read(): Generator
    {
        $resource = $this->getFile()->getResource();

        /** @var Entity $entityClass */
        $entityClass = $this->getDatasetType()->getClass();

        $header = [];

        while (($row = fgetcsv($resource)) !== false) {
            if ($header === [] and count($row)) {
                $header = $row; continue;
            }

            yield new $entityClass(
                array_combine($header, $row)
            );
        }
    }
}