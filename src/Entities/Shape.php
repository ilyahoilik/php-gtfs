<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Shape extends Entity
{
    public string|int $shape_id;

    public ?float $shape_pt_lat = null;

    public ?float $shape_pt_lon = null;

    public ?int $shape_pt_sequence = null; // NonNegativeInteger

    public ?float $shape_dist_traveled = null; // NonNegativeFloat
}