<?php

namespace GTFS\Static\Archive\Extractors;

use GTFS\Static\Archive\ArchiveFileInterface;

interface ExtractorInterface
{
    public function extract(ArchiveFileInterface $archive): void;
}