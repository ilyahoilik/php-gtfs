<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Level;

class Levels extends Dataset
{
    public string $entity_class = Level::class;
}