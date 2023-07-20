<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Pathway;

class Pathways extends Dataset
{
    public string $entity_class = Pathway::class;
}