<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Level extends Entity
{
    public string|int $level_id;

    public ?float $level_index = null; // BaseFloat

    public ?string $level_name = null;
}