<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\PhoneNumber;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class Attribution extends Entity
{
    public function __construct(
        public ID $attribution_id = new ID,
        public ID $agency_id = new ID,
        public ID $route_id = new ID,
        public ID $trip_id = new ID,
        public Text $organization_name = new Text,
        public IntegerEnum $is_producer = new IntegerEnum,
        public IntegerEnum $is_operator = new IntegerEnum,
        public IntegerEnum $is_authority = new IntegerEnum,
        public URL $attribution_url = new URL,
        public Email $attribution_email = new Email,
        public PhoneNumber $attribution_phone = new PhoneNumber,
    ) {}
}