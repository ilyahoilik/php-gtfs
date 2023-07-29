<?php

namespace GTFS\Static\Contracts\Archive;

interface Archive
{
    public function __construct(File $file);

    public function getFile(): File;
}