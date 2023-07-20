<?php

namespace GTFS\Static\Archive;

interface FileInterface
{
    public function __construct(string $path);

    public function getPath(): string;

    public function getDirectory(): string;
}