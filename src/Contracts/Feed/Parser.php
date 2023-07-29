<?php

namespace GTFS\Static\Contracts\Feed;

use Generator;
use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Contracts\Archive\File;

interface Parser
{
    public function __construct(DatasetType $datasetType, File $file);

    public function getType(): DatasetType;

    public function getFile(): File;

    public function entities(): Generator;
}