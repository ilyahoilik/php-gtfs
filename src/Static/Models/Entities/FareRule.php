<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\ID;

class FareRule extends Entity
{
    public function __construct(
        public ID $fare_id = new ID,
        public ID $route_id = new ID,
        public ID $origin_id = new ID,
        public ID $destination_id = new ID,
        public ID $contains_id = new ID,
    ) {}
}