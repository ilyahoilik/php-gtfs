<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\LanguageCode;
use GTFS\Static\Models\Fields\PhoneNumber;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\Timezone;
use GTFS\Static\Models\Fields\URL;

class Agency extends Entity
{
    public function __construct(
        public ID $agency_id = new ID,
        public Text $agency_name = new Text,
        public URL $agency_url = new URL,
        public Timezone $agency_timezone = new Timezone,
        public LanguageCode $agency_lang = new LanguageCode,
        public PhoneNumber $agency_phone = new PhoneNumber,
        public URL $agency_fare_url = new URL,
        public Email $agency_email = new Email,
    ) {}
}