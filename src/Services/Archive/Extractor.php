<?php

namespace GTFS\Static\Services\Archive;

use GTFS\Static\Contracts\Archive\Archive;
use GTFS\Static\Contracts\Archive\Extractor as ExtractorContract;

abstract class Extractor implements ExtractorContract
{
    public function __construct(protected Archive $archive) {}

    public function getArchive(): Archive
    {
        return $this->archive;
    }
}