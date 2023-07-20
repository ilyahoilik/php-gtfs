<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\BaseFloat;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\NonNegativeFloat;
use GTFS\Static\Models\Fields\NonNullInteger;
use GTFS\Static\Models\Fields\PositiveFloat;
use GTFS\Static\Models\Fields\PositiveInteger;
use GTFS\Static\Models\Fields\Text;

class Pathway extends Entity
{
    public function __construct(
        public ID $pathway_id = new ID,
        public ID $from_stop_id = new ID,
        public ID $to_stop_id = new ID,
        public IntegerEnum $pathway_mode = new IntegerEnum,
        public IntegerEnum $is_bidirectional = new IntegerEnum,
        public NonNegativeFloat $length = new NonNegativeFloat,
        public PositiveInteger $traversal_time = new PositiveInteger,
        public NonNullInteger $stair_count = new NonNullInteger,
        public BaseFloat $max_slope = new BaseFloat,
        public PositiveFloat $min_width = new PositiveFloat,
        public Text $signposted_as = new Text,
        public Text $reversed_signposted_as = new Text,
    ) {}
}