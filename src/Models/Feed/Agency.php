<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Language;
use GTFS\Static\Models\Fields\Phone;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\Timezone;
use GTFS\Static\Models\Fields\URL;

class Agency extends Entity
{
    const DATASET_TYPE = DatasetType::Agency;

    public function __construct(
        public ID $agency_id = new ID,
        public Text $agency_name = new Text,
        public URL $agency_url = new URL,
        public Timezone $agency_timezone = new Timezone,
        public Language $agency_lang = new Language,
        public Phone $agency_phone = new Phone,
        public URL $agency_fare_url = new URL,
        public Email $agency_email = new Email
    ) {}
}