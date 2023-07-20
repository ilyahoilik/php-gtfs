<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\Date;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;

class Calendar extends Entity
{
    public function __construct(
        public ID $service_id = new ID,
        public IntegerEnum $monday = new IntegerEnum,
        public IntegerEnum $tuesday = new IntegerEnum,
        public IntegerEnum $wednesday = new IntegerEnum,
        public IntegerEnum $thursday = new IntegerEnum,
        public IntegerEnum $friday = new IntegerEnum,
        public IntegerEnum $saturday = new IntegerEnum,
        public IntegerEnum $sunday = new IntegerEnum,
        public Date $start_date = new Date,
        public Date $end_date = new Date,
    ) {}
}