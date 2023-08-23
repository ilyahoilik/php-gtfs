<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Route extends Entity
{
    public string|int $route_id;

    public string|int $agency_id;

    public ?string $route_short_name = null;

    public ?string $route_long_name = null;

    public ?string $route_desc = null;

    public ?int $route_type = null; // IntegerEnum

    public ?string $route_url = null;

    public ?string $route_color = null;

    public ?string $route_text_color = null;

    public ?int $route_sort_order = null; // NonNegativeInteger

    public ?int $continuous_pickup = null; // IntegerEnum

    public ?int $continuous_drop_off = null; // IntegerEnum
}