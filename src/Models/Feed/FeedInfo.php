<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Date;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\Language;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class FeedInfo extends Entity
{
    const DATASET_TYPE = DatasetType::FeedInfo;

    public function __construct(
        public Text $feed_publisher_name = new Text,
        public URL $feed_publisher_url = new URL,
        public Language $feed_lang = new Language,
        public Language $default_lang = new Language,
        public Date $feed_start_date = new Date,
        public Date $feed_end_date = new Date,
        public Text $feed_version = new Text,
        public Email $feed_contact_email = new Email,
        public URL $feed_contact_url = new URL
    ) {}
}