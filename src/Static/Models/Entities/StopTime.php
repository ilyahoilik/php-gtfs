<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\NonNegativeFloat;
use GTFS\Static\Models\Fields\NonNegativeInteger;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\Time;

class StopTime extends Entity
{
    public function __construct(
        public ID $trip_id = new ID,
        public Time $arrival_time = new Time,
        public Time $departure_time = new Time,
        public ID $stop_id = new ID,
        public NonNegativeInteger $stop_sequence = new NonNegativeInteger,
        public Text $stop_headsign = new Text,
        public IntegerEnum $pickup_type = new IntegerEnum,
        public IntegerEnum $drop_off_type = new IntegerEnum,
        public IntegerEnum $continuous_pickup = new IntegerEnum,
        public IntegerEnum $continuous_drop_off = new IntegerEnum,
        public NonNegativeFloat $shape_dist_traveled = new NonNegativeFloat,
        public IntegerEnum $timepoint = new IntegerEnum,
    ) {}
}