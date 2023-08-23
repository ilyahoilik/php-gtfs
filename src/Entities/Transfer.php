<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Transfer extends Entity
{
    public string|int $from_stop_id;

    public string|int $to_stop_id;

    public ?int $transfer_type = null; // IntegerEnum

    public ?int $min_transfer_time = null; // NonNegativeInteger
}