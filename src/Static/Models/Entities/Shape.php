<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Latitude;
use GTFS\Static\Models\Fields\Longitude;
use GTFS\Static\Models\Fields\NonNegativeFloat;
use GTFS\Static\Models\Fields\NonNegativeInteger;

class Shape extends Entity
{
    public function __construct(
        public ID $shape_id = new ID,
        public Latitude $shape_pt_lat = new Latitude,
        public Longitude $shape_pt_lon = new Longitude,
        public NonNegativeInteger $shape_pt_sequence = new NonNegativeInteger,
        public NonNegativeFloat $shape_dist_traveled = new NonNegativeFloat,
    ) {}
}