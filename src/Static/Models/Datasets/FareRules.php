<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\FareRule;

class FareRules extends Dataset
{
    public string $entity_class = FareRule::class;
}