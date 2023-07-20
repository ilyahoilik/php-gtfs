<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Agency as EntitiesAgency;

class Agency extends Dataset
{
    public string $entity_class = EntitiesAgency::class;
}