<?php

namespace GTFS\Static\Models\Archive;

use GTFS\Static\Contracts\Archive\File as FileContract;
use GTFS\Static\Utilities\FileSystem;

class File implements FileContract
{
    public function __construct(protected string $path) {}

    public function getPath(): string
    {
        return $this->path;
    }

    public function getDirectory(): string
    {
        return pathinfo($this->path)['dirname'];
    }

    public function getFilename(): string
    {
        return basename($this->path);
    }

    public static function makeRandom(): static
    {
        return new static(FileSystem::newRandomFile());
    }
}