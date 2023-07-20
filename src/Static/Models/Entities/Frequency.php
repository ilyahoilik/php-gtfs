<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\NonNegativeInteger;
use GTFS\Static\Models\Fields\Time;

class Frequency extends Entity
{
    public function __construct(
        public ID $trip_id = new ID,
        public Time $start_time = new Time,
        public Time $end_time = new Time,
        public NonNegativeInteger $headway_secs = new NonNegativeInteger,
        public IntegerEnum $exact_times = new IntegerEnum,
    ) {}
}