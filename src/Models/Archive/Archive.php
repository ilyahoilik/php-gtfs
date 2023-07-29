<?php

namespace GTFS\Static\Models\Archive;

use GTFS\Static\Contracts\Archive\Archive as ArchiveContract;
use GTFS\Static\Contracts\Archive\File;

class Archive implements ArchiveContract
{
    public function __construct(protected File $file) {}

    public function getFile(): File
    {
        return $this->file;
    }
}