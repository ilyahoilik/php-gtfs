<?php

namespace GTFS\Static\Contracts\Archive;

interface Extractor
{
    public function __construct(Archive $archive);

    public function getArchive(): Archive;

    public function extract(): void;
}