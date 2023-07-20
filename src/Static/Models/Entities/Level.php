<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\BaseFloat;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Text;

class Level extends Entity
{
    public function __construct(
        public ID $level_id = new ID,
        public BaseFloat $level_index = new BaseFloat,
        public Text $level_name = new Text,
    ) {}
}