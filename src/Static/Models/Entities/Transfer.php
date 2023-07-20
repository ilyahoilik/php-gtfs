<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\NonNegativeInteger;

class Transfer extends Entity
{
    public function __construct(
        public ID $from_stop_id = new ID,
        public ID $to_stop_id = new ID,
        public IntegerEnum $transfer_type = new IntegerEnum,
        public NonNegativeInteger $min_transfer_time = new NonNegativeInteger,
    ) {}
}