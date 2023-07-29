<?php

namespace GTFS\Static\Contracts\Feed;

use GTFS\Static\Constants\DatasetType;

interface Entity
{
    public static function getType(): DatasetType;

    public function toArray(): array;

    public static function fromArray(array $data): static;
}