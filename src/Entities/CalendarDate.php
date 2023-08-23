<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class CalendarDate extends Entity
{
    public string|int $service_id;

    public ?string $date = null;

    public ?int $exception_type = null; // IntegerEnum
}