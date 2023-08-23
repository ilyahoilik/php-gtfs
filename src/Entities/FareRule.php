<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class FareRule extends Entity
{
    public string|int $fare_id;

    public string|int $route_id;

    public string|int $origin_id;

    public string|int $destination_id;

    public string|int $contains_id;
}