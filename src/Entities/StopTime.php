<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class StopTime extends Entity
{
    public string|int $trip_id;

    public ?string $arrival_time = null;

    public ?string $departure_time = null;

    public string|int $stop_id;

    public ?int $stop_sequence = null; // NonNegativeInteger

    public ?string $stop_headsign = null;

    public ?int $pickup_type = null; // IntegerEnum

    public ?int $drop_off_type = null; // IntegerEnum

    public ?int $continuous_pickup = null; // IntegerEnum

    public ?int $continuous_drop_off = null; // IntegerEnum

    public ?float $shape_dist_traveled = null; // NonNegativeFloat

    public ?int $timepoint = null; // IntegerEnum
}