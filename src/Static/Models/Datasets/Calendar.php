<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\Calendar as EntitiesCalendar;

class Calendar extends Dataset
{
    public string $entity_class = EntitiesCalendar::class;
}