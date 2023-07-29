<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Phone;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class Attribution extends Entity
{
    const DATASET_TYPE = DatasetType::Attribution;

    public function __construct(
        public ID $attribution_id = new ID,
        public ID $agency_id = new ID,
        public ID $route_id = new ID,
        public ID $trip_id = new ID,
        public Text $organization_name = new Text,
        public Enum $is_producer = new Enum, // IntegerEnum
        public Enum $is_operator = new Enum, // IntegerEnum
        public Enum $is_authority = new Enum, // IntegerEnum
        public URL $attribution_url = new URL,
        public Email $attribution_email = new Email,
        public Phone $attribution_phone = new Phone
    ) {}
}