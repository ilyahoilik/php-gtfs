<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Integer;
use GTFS\Static\Models\Fields\Time;

class Frequency extends Entity
{
    const DATASET_TYPE = DatasetType::Frequency;

    public function __construct(
        public ID $trip_id = new ID,
        public Time $start_time = new Time,
        public Time $end_time = new Time,
        public Integer $headway_secs = new Integer, // NonNegativeInteger
        public Enum $exact_times = new Enum // IntegerEnum
    ) {}
}