<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Stop;

class Stops extends Dataset
{
    public string $entity_class = Stop::class;
}