<?php

namespace GTFS\Static\Archive\Extractors;

use Exception;
use GTFS\Static\Archive\ArchiveFileInterface;
use GTFS\Static\Archive\Extractors\ExtractorInterface;
use ZipArchive;

class ZipExtractor implements ExtractorInterface
{
    public function extract(ArchiveFileInterface $archive): void
    {
        $directory = $archive->getDirectory();
        $archive = $archive->getPath();

        $zip = new ZipArchive;

        if ($zip->open($archive) === true) {
            $zip->extractTo($directory);
            $zip->close();
        } else {
            throw new Exception("Error Processing Request", 1);
        }
    }
}