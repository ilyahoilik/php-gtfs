<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\FareAttribute;

class FareAttributes extends Dataset
{
    public string $entity_class = FareAttribute::class;
}