<?php

namespace GTFS\Static\Contracts\Archive;

interface File
{
    public function __construct(string $path);

    public function getPath(): string;

    public function getDirectory(): string;

    public function getFilename(): string;
}