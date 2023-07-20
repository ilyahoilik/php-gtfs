<?php

namespace GTFS\Static\Archive\Parsers;

use Exception;
use GTFS\Static\Archive\Parsers\ParserInterface;
use GTFS\Static\Dataset\DatasetInterface;

class CsvParser implements ParserInterface
{
    public function __construct(
        protected string $origin,
        protected DatasetInterface $dataset
    ) {}

    public function parse(): DatasetInterface
    {
        $file = $this->safelyOpenFile();

        ini_set('memory_limit', '2G');

        foreach ($this->process($file) as $value) {
            $this->dataset->push($value);
        }

        $this->safelyCloseFile($file);

        return $this->dataset;
    }

    protected function process($file)
    {
        $header = [];

        while (($row = fgetcsv($file, separator: ',')) !== false) {
            if ($header === [] and count($row)) {
                $header = $row;
                continue;
            } else {
                yield array_combine($header, $row);
            }
        }
    }

    protected function safelyOpenFile()
    {
        $file = @fopen($this->origin, 'r');

        if ($file === false) {
            throw new Exception;
        }

        if ($file && (fgets($file, 4) !== "\xef\xbb\xbf")) {
            rewind($file);
        }

        return $file;
    }

    private function safelyCloseFile($file)
    {
        fclose($file);
    }
}