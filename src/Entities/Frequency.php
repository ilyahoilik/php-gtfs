<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Frequency extends Entity
{
    public string|int $trip_id;

    public ?string $start_time = null;

    public ?string $end_time = null;

    public ?int $headway_secs = null; // NonNegativeInteger

    public ?int $exact_times = null; // IntegerEnum
}