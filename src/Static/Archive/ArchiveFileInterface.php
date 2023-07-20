<?php

namespace GTFS\Static\Archive;

use GTFS\Static\Archive\Extractors\ExtractorInterface;
use GTFS\Static\Archive\Fetchers\FetcherInterface;
use GTFS\Static\Archive\FileInterface;

interface ArchiveFileInterface extends FileInterface
{
    public static function create(FetcherInterface $fetcher): static;

    public function extract(ExtractorInterface $extractor): static;

    public function parse(): static;
}