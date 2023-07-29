<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\ID;

class FareRule extends Entity
{
    const DATASET_TYPE = DatasetType::FareRule;

    public function __construct(
        public ID $fare_id = new ID,
        public ID $route_id = new ID,
        public ID $origin_id = new ID,
        public ID $destination_id = new ID,
        public ID $contains_id = new ID
    ) {}
}