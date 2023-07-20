<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Trip;

class Trips extends Dataset
{
    public string $entity_class = Trip::class;
}