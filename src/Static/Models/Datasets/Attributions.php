<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Attribution;

class Attributions extends Dataset
{
    public string $entity_class = Attribution::class;
}