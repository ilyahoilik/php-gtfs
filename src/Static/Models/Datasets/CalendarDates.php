<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\CalendarDate;

class CalendarDates extends Dataset
{
    public string $entity_class = CalendarDate::class;
}