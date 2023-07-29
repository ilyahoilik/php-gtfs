<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Language;
use GTFS\Static\Models\Fields\Phone;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class Translation extends Entity
{
    const DATASET_TYPE = DatasetType::Translation;

    public function __construct(
        public Enum $table_name = new Enum, // StringEnum
        public Text $field_name = new Text,
        public Language $language = new Language,
        public Text|URL|Email|Phone $translation = new Text,
        public ID $record_id = new ID,
        public ID $record_sub_id = new ID,
        public Text|URL|Email|Phone $field_value = new Text
    ) {}
}