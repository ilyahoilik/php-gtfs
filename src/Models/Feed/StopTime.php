<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Floaty;
use GTFS\Static\Models\Fields\Integer;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\Time;

class StopTime extends Entity
{
    const DATASET_TYPE = DatasetType::StopTime;

    public function __construct(
        public ID $trip_id = new ID,
        public Time $arrival_time = new Time,
        public Time $departure_time = new Time,
        public ID $stop_id = new ID,
        public Integer $stop_sequence = new Integer, // NonNegativeInteger
        public Text $stop_headsign = new Text,
        public Enum $pickup_type = new Enum, // IntegerEnum
        public Enum $drop_off_type = new Enum, // IntegerEnum
        public Enum $continuous_pickup = new Enum, // IntegerEnum
        public Enum $continuous_drop_off = new Enum, // IntegerEnum
        public Floaty $shape_dist_traveled = new Floaty, // NonNegativeFloat
        public Enum $timepoint = new Enum // IntegerEnum
    ) {}
}