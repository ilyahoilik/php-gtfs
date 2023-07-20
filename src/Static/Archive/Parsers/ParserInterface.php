<?php

namespace GTFS\Static\Archive\Parsers;

use GTFS\Static\Dataset\DatasetInterface;

interface ParserInterface
{
    public function __construct(string $origin, DatasetInterface $dataset);

    public function parse(): DatasetInterface;
}