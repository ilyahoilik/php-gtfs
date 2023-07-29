<?php

namespace GTFS\Static\Models\Archive;

use GTFS\Static\Contracts\Archive\Directory as DirectoryContract;

class Directory implements DirectoryContract
{
    public function __construct(protected string $path) {}

    public function getPath(): string
    {
        return $this->path;
    }

    public function getDirname(): string
    {
        return dirname($this->path);
    }
}