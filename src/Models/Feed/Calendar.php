<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Date;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;

class Calendar extends Entity
{
    const DATASET_TYPE = DatasetType::Calendar;

    public function __construct(
        public ID $service_id = new ID,
        public Enum $monday = new Enum, // IntegerEnum
        public Enum $tuesday = new Enum, // IntegerEnum
        public Enum $wednesday = new Enum, // IntegerEnum
        public Enum $thursday = new Enum, // IntegerEnum
        public Enum $friday = new Enum, // IntegerEnum
        public Enum $saturday = new Enum, // IntegerEnum
        public Enum $sunday = new Enum, // IntegerEnum
        public Date $start_date = new Date,
        public Date $end_date = new Date
    ) {}
}