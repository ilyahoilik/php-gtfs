<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\Date;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;

class CalendarDate extends Entity
{
    public function __construct(
        public ID $service_id = new ID,
        public Date $date = new Date,
        public IntegerEnum $exception_type = new IntegerEnum,
    ) {}
}