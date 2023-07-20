<?php

namespace GTFS\Static\Archive\Fetchers;

interface FetcherInterface
{
    public function fetch(): static;

    // @todo: возвращать что-то более надёжное, чем путь к архиву
    public function path(): string;
}