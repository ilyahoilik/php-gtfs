<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Shape;

class Shapes extends Dataset
{
    public string $entity_class = Shape::class;
}