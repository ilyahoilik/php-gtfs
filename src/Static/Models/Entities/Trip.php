<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\Text;

class Trip extends Entity
{
    public function __construct(
        public ID $route_id = new ID,
        public ID $service_id = new ID,
        public ID $trip_id = new ID,
        public Text $trip_headsign = new Text,
        public Text $trip_short_name = new Text,
        public IntegerEnum $direction_id = new IntegerEnum,
        public ID $block_id = new ID,
        public ID $shape_id = new ID,
        public IntegerEnum $wheelchair_accessible = new IntegerEnum,
        public IntegerEnum $bikes_allowed = new IntegerEnum,
    ) {}
}