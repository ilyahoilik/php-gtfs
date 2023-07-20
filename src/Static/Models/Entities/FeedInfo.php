<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\Date;
use GTFS\Static\Models\Fields\Email;
use GTFS\Static\Models\Fields\LanguageCode;
use GTFS\Static\Models\Fields\Text;
use GTFS\Static\Models\Fields\URL;

class FeedInfo extends Entity
{
    public function __construct(
        public Text $feed_publisher_name = new Text,
        public URL $feed_publisher_url = new URL,
        public LanguageCode $feed_lang = new LanguageCode,
        public LanguageCode $default_lang = new LanguageCode,
        public Date $feed_start_date = new Date,
        public Date $feed_end_date = new Date,
        public Text $feed_version = new Text,
        public Email $feed_contact_email = new Email,
        public URL $feed_contact_url = new URL,
    ) {}
}