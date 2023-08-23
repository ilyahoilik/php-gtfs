<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class FeedInfo extends Entity
{
    public ?string $feed_publisher_name = null;

    public ?string $feed_publisher_url = null;

    public ?string $feed_lang = null;

    public ?string $default_lang = null;

    public ?string $feed_start_date = null;

    public ?string $feed_end_date = null;

    public ?string $feed_version = null;

    public ?string $feed_contact_email = null;

    public ?string $feed_contact_url = null;
}