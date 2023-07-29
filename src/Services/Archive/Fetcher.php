<?php

namespace GTFS\Static\Services\Archive;

use GTFS\Static\Contracts\Archive\Fetcher as FetcherContract;
use GTFS\Static\Contracts\Archive\File;

abstract class Fetcher implements FetcherContract
{
    public function __construct(
        protected string $source,
        protected File $destination
    ) {}

    public function getSource(): string
    {
        return $this->source;
    }

    public function getDestination(): File
    {
        return $this->destination;
    }
}