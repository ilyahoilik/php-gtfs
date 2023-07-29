<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Currency;
use GTFS\Static\Models\Fields\ID;
use GTFS\Static\Models\Fields\Enum;
use GTFS\Static\Models\Fields\Floaty;
use GTFS\Static\Models\Fields\Integer;

class FareAttribute extends Entity
{
    const DATASET_TYPE = DatasetType::FareAttribute;

    public function __construct(
        public ID $fare_id = new ID,
        public Floaty $price = new Floaty, // NonNegativeFloat
        public Currency $currency_type = new Currency,
        public Enum $payment_method = new Enum, // IntegerEnum
        public Enum $transfers = new Enum, // IntegerEnum
        public ID $agency_id = new ID,
        public Integer $transfer_duration = new Integer // NonNegativeInteger
    ) {}
}