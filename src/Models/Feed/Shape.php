<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Latitude;
use GTFS\Static\Models\Fields\Longitude;
use GTFS\Static\Models\Fields\Floaty;
use GTFS\Static\Models\Fields\Integer;

class Shape extends Entity
{
    const DATASET_TYPE = DatasetType::Shape;

    public function __construct(
        public ID $shape_id = new ID,
        public Latitude $shape_pt_lat = new Latitude,
        public Longitude $shape_pt_lon = new Longitude,
        public Integer $shape_pt_sequence = new Integer, // NonNegativeInteger
        public Floaty $shape_dist_traveled = new Floaty // NonNegativeFloat
    ) {}
}