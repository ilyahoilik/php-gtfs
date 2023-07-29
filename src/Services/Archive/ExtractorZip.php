<?php

namespace GTFS\Static\Services\Archive;

use ZipArchive;

class ExtractorZip extends Extractor
{
    public function extract(): void
    {
        $archive = $this->getArchive()->getFile();

        $zip = new ZipArchive;

        if ($zip->open($archive->getPath()) === true) {
            $zip->extractTo($archive->getDirectory());
            $zip->close();
        };
    }
}