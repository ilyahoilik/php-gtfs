<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Transfer;

class Transfers extends Dataset
{
    public string $entity_class = Transfer::class;
}