<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Text;

class Trip extends Entity
{
    const DATASET_TYPE = DatasetType::Trip;

    public function __construct(
        public ID $route_id = new ID,
        public ID $service_id = new ID,
        public ID $trip_id = new ID,
        public Text $trip_headsign = new Text,
        public Text $trip_short_name = new Text,
        public Enum $direction_id = new Enum, // IntegerEnum
        public ID $block_id = new ID,
        public ID $shape_id = new ID,
        public Enum $wheelchair_accessible = new Enum, // IntegerEnum
        public Enum $bikes_allowed = new Enum // IntegerEnum
    ) {}
}