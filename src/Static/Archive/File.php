<?php

namespace GTFS\Static\Archive;

abstract class File implements FileInterface
{
    public function __construct(protected string $path) {}

    public function getPath(): string
    {
        return $this->path;
    }

    public function getDirectory(): string
    {
        return dirname($this->path);
    }
}