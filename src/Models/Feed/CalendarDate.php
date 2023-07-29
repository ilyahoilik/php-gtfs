<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Date;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;

class CalendarDate extends Entity
{
    const DATASET_TYPE = DatasetType::CalendarDate;

    public function __construct(
        public ID $service_id = new ID,
        public Date $date = new Date,
        public Enum $exception_type = new Enum // IntegerEnum
    ) {}
}