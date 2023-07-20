<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\LanguageCode;
use GTFS\Static\Models\Fields\PhoneNumber;
use GTFS\Static\Models\Fields\StringEnum;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class Translation extends Entity
{
    public function __construct(
        public StringEnum $table_name = new StringEnum,
        public Text $field_name = new Text,
        public LanguageCode $language = new LanguageCode,
        public Text|URL|Email|PhoneNumber $translation = new Text,
        public ID $record_id = new ID,
        public ID $record_sub_id = new ID,
        public Text|URL|Email|PhoneNumber $field_value = new Text,
    ) {}
}