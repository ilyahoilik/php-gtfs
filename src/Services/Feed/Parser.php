<?php

namespace GTFS\Static\Services\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Contracts\Archive\File;
use GTFS\Static\Contracts\Feed\Parser as ParserContract;

abstract class Parser implements ParserContract
{
    public function __construct(
        protected DatasetType $datasetType,
        protected File $file
    ) {}

    public function getType(): DatasetType
    {
        return $this->datasetType;
    }

    public function getFile(): File
    {
        return $this->file;
    }
}