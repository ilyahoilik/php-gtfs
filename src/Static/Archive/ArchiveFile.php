<?php

namespace GTFS\Static\Archive;

use GTFS\Static\Archive\ArchiveFileInterface;
use GTFS\Static\Archive\Concerns\HasDatasets;
use GTFS\Static\Archive\Extractors\ExtractorInterface;
use GTFS\Static\Archive\Fetchers\FetcherInterface;
use GTFS\Static\Archive\File;
use GTFS\Static\Archive\Parsers\CsvParser;
use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Dataset\DatasetName;

class ArchiveFile extends File implements ArchiveFileInterface
{
    use HasDatasets;

    public static function create(FetcherInterface $fetcher): static
    {
        return new static($fetcher->fetch()->path());
    }

    public function extract(ExtractorInterface $extractor): static
    {
        (new $extractor)->extract($this);

        return $this;
    }

    public function parse(): static
    {
        $directory = array_diff(scandir($this->getDirectory()), ['..', '.']);

        foreach ($directory as $item) {
            list($filename, $extension) = explode('.', $item);

            if (! isset($extension) || $extension !== 'txt') {
                continue;
            }

            if ($dataset_name = DatasetName::tryFrom($filename)) {
                $path = $this->getDirectory() . '/' . $filename . '.txt';

                $dataset = Dataset::getByFilename($filename);

                $this->{'set' . $dataset_name->name}(
                    (new CsvParser($path, $dataset))->parse()
                );
            }
        }

        return $this;
    }
}