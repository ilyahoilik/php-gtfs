<?php

namespace GTFS\Static\Services\Feed;

use Exception;
use Generator;
use GTFS\Static\Contracts\Feed\Entity;

class ParserCsv extends Parser
{
    public function entities(): Generator
    {
        $file = $this->safelyOpenFile();

        return $this->parseEntities($file);
    }

    protected function parseEntities($file): Generator
    {
        $header = [];

        while (($row = fgetcsv($file, separator: ',')) !== false) {
            if ($header === [] and count($row)) {
                $header = $row; continue;
            }

            $this->processRow($header, $row);

            yield $this->parseEntity(
                array_combine($header, $row)
            );
        }
    }

    protected function parseEntity(array $data): Entity
    {
        /** @var Entity $entity */
        $entity = $this->getType()->getClassname();

        return $entity::fromArray($data);
    }

    protected function processRow($header, &$row): void
    {
        //
    }

    protected function safelyOpenFile(): mixed
    {
        $file = @fopen((string) $this->getFile()->getPath(), 'r');

        if ($file === false) {
            throw new Exception;
        }

        if (fgets($file, 4) !== "\xef\xbb\xbf") {
            rewind($file);
        }

        return $file;
    }
}