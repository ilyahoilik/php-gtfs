<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Pathway extends Entity
{
    public string|int $pathway_id;

    public string|int $from_stop_id;

    public string|int $to_stop_id;

    public ?int $pathway_mode = null; // IntegerEnum

    public ?int $is_bidirectional = null; // IntegerEnum

    public ?float $length = null; // NonNegativeFloat

    public ?int $traversal_time = null; // PositiveInteger

    public ?int $stair_count = null; // NonNullInteger

    public ?float $max_slope = null; // BaseFloat

    public ?float $min_width = null; // PositiveFloat

    public ?string $signposted_as = null;

    public ?string $reversed_signposted_as = null;
}