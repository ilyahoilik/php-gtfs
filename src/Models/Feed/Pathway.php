<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Floaty;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Integer;
use GTFS\Static\Models\Fields\Text;

class Pathway extends Entity
{
    const DATASET_TYPE = DatasetType::Pathway;

    public function __construct(
        public ID $pathway_id = new ID,
        public ID $from_stop_id = new ID,
        public ID $to_stop_id = new ID,
        public Enum $pathway_mode = new Enum, // IntegerEnum
        public Enum $is_bidirectional = new Enum, // IntegerEnum
        public Floaty $length = new Floaty, // NonNegativeFloat
        public Integer $traversal_time = new Integer, // PositiveInteger
        public Integer $stair_count = new Integer, // NonNullInteger
        public Floaty $max_slope = new Floaty, // BaseFloat
        public Floaty $min_width = new Floaty, // PositiveFloat
        public Text $signposted_as = new Text,
        public Text $reversed_signposted_as = new Text
    ) {}
}