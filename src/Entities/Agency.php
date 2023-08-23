<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Agency extends Entity
{
    public string|int $agency_id;

    public ?string $agency_name = null;

    public ?string $agency_url = null;

    public ?string $agency_timezone = null;

    public ?string $agency_lang = null;

    public ?string $agency_phone = null;

    public ?string $agency_fare_url = null;

    public ?string $agency_email = null;
}