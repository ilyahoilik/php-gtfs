<?php

namespace GTFS\Static\Archive\Fetchers;

use GTFS\Static\Archive\Fetchers\FetcherInterface;
use GTFS\Static\Utils\FileSystem;

class FetchFromPath implements FetcherInterface
{
    protected ?string $destination = null;

    public function __construct(protected string $origin) {}

    public function fetch(): static
    {
        $this->destination = FileSystem::newZipPath();

        copy($this->origin, $this->destination);

        return $this;
    }

    public function path(): string
    {
        return $this->destination;
    }
}