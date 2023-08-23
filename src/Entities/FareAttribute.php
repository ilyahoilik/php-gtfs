<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class FareAttribute extends Entity
{
    public string|int $fare_id;

    public ?float $price = null; // NonNegativeFloat

    public ?string $currency_type = null;

    public ?int $payment_method = null; // IntegerEnum

    public ?int $transfers = null; // IntegerEnum

    public string|int $agency_id;

    public ?int $transfer_duration = null; // NonNegativeInteger
}