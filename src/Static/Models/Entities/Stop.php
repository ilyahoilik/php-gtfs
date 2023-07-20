<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\Latitude;
use GTFS\Static\Models\Fields\Longitude;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\Timezone;
use GTFS\Static\Models\Fields\URL;

class Stop extends Entity
{
    public function __construct(
        public ID $stop_id = new ID,
        public Text $stop_code = new Text,
        public Text $stop_name = new Text,
        public Text $stop_desc = new Text,
        public Latitude $stop_lat = new Latitude,
        public Longitude $stop_lon = new Longitude,
        public ID $zone_id = new ID,
        public URL $stop_url = new URL,
        public IntegerEnum $location_type = new IntegerEnum,
        public ID $parent_station = new ID,
        public Timezone $stop_timezone = new Timezone,
        public IntegerEnum $wheelchair_boarding = new IntegerEnum,
        public ID $level_id = new ID,
        public Text $platform_code = new Text,
    ) {}
}