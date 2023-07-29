<?php

namespace GTFS\Static;

use Generator;
use GTFS\Static\Concerns\HasReplaceableClasses;
use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Contracts\Archive\Archive;
use GTFS\Static\Models\Archive\File;

class Reader
{
    use HasReplaceableClasses;

    public static function read(string $url): Generator
    {
        $reader = new static;

        $parserClass = $reader->getParserClass();
        $fileClass = $reader->getFileClass();

        $archive = $reader->extractArchive(
            $reader->fetchArchive($url)
        );

        foreach (DatasetType::cases() as $datasetType) {
            $directory = $archive->getFile()->getDirectory();

            $path = $directory . '/' . $datasetType->getFilename();

            if (file_exists($path)) {
                $parser = new $parserClass($datasetType, new $fileClass($path));

                foreach ($parser->entities() as $row) {
                    yield $row;
                }
            }
        }
    }

    protected function fetchArchive($url): Archive
    {
        $archiveClass = $this->getArchiveClass();
        $fetcherClass = $this->getFetcherClass();

        $fetcher = new $fetcherClass($url, File::makeRandom());

        $filepath = $fetcher->fetch();

        return new $archiveClass($filepath);
    }

    protected function extractArchive(Archive $archive): Archive
    {
        $extractorClass = $this->getExtractorClass();

        $extractor = new $extractorClass($archive);

        $extractor->extract();

        return $archive;
    }
}