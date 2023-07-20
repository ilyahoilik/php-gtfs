<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\Color;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\NonNegativeInteger;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class Route extends Entity
{
    public function __construct(
        public ID $route_id = new ID,
        public ID $agency_id = new ID,
        public Text $route_short_name = new Text,
        public Text $route_long_name = new Text,
        public Text $route_desc = new Text,
        public IntegerEnum $route_type = new IntegerEnum,
        public URL $route_url = new URL,
        public Color $route_color = new Color,
        public Color $route_text_color = new Color,
        public NonNegativeInteger $route_sort_order = new NonNegativeInteger,
        public IntegerEnum $continuous_pickup = new IntegerEnum,
        public IntegerEnum $continuous_drop_off = new IntegerEnum,
    ) {}
}