<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\StopTime;

class StopTimes extends Dataset
{
    public string $entity_class = StopTime::class;
}