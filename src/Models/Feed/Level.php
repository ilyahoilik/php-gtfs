<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Floaty;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Text;

class Level extends Entity
{
    const DATASET_TYPE = DatasetType::Level;

    public function __construct(
        public ID $level_id = new ID,
        public Floaty $level_index = new Floaty, // BaseFloat
        public Text $level_name = new Text
    ) {}
}