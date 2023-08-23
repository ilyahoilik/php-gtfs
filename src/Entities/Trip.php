<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Trip extends Entity
{
    public string|int $route_id;

    public string|int $service_id;

    public string|int $trip_id;

    public ?string $trip_headsign = null;

    public ?string $trip_short_name = null;

    public ?int $direction_id = null; // IntegerEnum

    public string|int $block_id;

    public string|int $shape_id;

    public ?int $wheelchair_accessible = null; // IntegerEnum

    public ?int $bikes_allowed = null; // IntegerEnum
}