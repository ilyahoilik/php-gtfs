<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Stop extends Entity
{
    public string|int $stop_id;

    public ?string $stop_code = null;

    public ?string $stop_name = null;

    public ?string $stop_desc = null;

    public ?float $stop_lat = null;

    public ?float $stop_lon = null;

    public string|int|null $zone_id = null;

    public ?string $stop_url = null;

    public ?int $location_type = null; // IntegerEnum

    public string|int|null $parent_station = null;

    public string $stop_timezone;

    public int $wheelchair_boarding; // IntegerEnum

    public string|int $level_id;

    public string $platform_code;
}