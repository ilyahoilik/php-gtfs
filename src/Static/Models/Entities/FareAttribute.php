<?php

namespace GTFS\Static\Models\Entities;

use GTFS\Static\Entity\Entity;
use GTFS\Static\Models\Fields\CurrencyCode;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\IntegerEnum;
use GTFS\Static\Models\Fields\NonNegativeFloat;
use GTFS\Static\Models\Fields\NonNegativeInteger;

class FareAttribute extends Entity
{
    public function __construct(
        public ID $fare_id = new ID,
        public NonNegativeFloat $price = new NonNegativeFloat,
        public CurrencyCode $currency_type = new CurrencyCode,
        public IntegerEnum $payment_method = new IntegerEnum,
        public IntegerEnum $transfers = new IntegerEnum,
        public ID $agency_id = new ID,
        public NonNegativeInteger $transfer_duration = new NonNegativeInteger,
    ) {}
}