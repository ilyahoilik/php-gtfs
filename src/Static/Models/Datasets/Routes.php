<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Route;

class Routes extends Dataset
{
    public string $entity_class = Route::class;
}