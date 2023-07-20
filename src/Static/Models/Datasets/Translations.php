<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Translation;

class Translations extends Dataset
{
    public string $entity_class = Translation::class;
}