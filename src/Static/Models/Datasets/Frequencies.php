<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Frequency;

class Frequencies extends Dataset
{
    public string $entity_class = Frequency::class;
}