<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Attribution extends Entity
{
    public string|int $attribution_id;

    public string|int $agency_id;

    public string|int $route_id;

    public string|int $trip_id;

    public ?string $organization_name = null;

    public ?int $is_producer = null; // IntegerEnum

    public ?int $is_operator = null; // IntegerEnum

    public ?int $is_authority = null; // IntegerEnum

    public ?string $attribution_url = null;

    public ?string $attribution_email = null;

    public ?string $attribution_phone = null;
}