<?php

namespace GTFS\Static\Contracts\Archive;

interface Directory
{
    public function __construct(string $path);

    public function getPath(): string;

    public function getDirname(): string;
}