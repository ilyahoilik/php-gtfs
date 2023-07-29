<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Color;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Integer;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class Route extends Entity
{
    const DATASET_TYPE = DatasetType::Route;

    public function __construct(
        public ID $route_id = new ID,
        public ID $agency_id = new ID,
        public Text $route_short_name = new Text,
        public Text $route_long_name = new Text,
        public Text $route_desc = new Text,
        public Enum $route_type = new Enum, // IntegerEnum
        public URL $route_url = new URL,
        public Color $route_color = new Color,
        public Color $route_text_color = new Color,
        public Integer $route_sort_order = new Integer, // NonNegativeInteger
        public Enum $continuous_pickup = new Enum, // IntegerEnum
        public Enum $continuous_drop_off = new Enum // IntegerEnum
    ) {}
}