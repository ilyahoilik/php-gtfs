<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Calendar extends Entity
{
    public string|int $service_id;

    public ?int $monday = null; // IntegerEnum

    public ?int $tuesday = null; // IntegerEnum

    public ?int $wednesday = null; // IntegerEnum

    public ?int $thursday = null; // IntegerEnum

    public ?int $friday = null; // IntegerEnum

    public ?int $saturday = null; // IntegerEnum

    public ?int $sunday = null; // IntegerEnum

    public ?string $start_date = null;

    public ?string $end_date = null;
}