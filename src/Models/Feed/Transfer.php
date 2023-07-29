<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Integer;

class Transfer extends Entity
{
    const DATASET_TYPE = DatasetType::Transfer;

    public function __construct(
        public ID $from_stop_id = new ID,
        public ID $to_stop_id = new ID,
        public Enum $transfer_type = new Enum, // IntegerEnum
        public Integer $min_transfer_time = new Integer // NonNegativeInteger
    ) {}
}