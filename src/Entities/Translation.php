<?php

namespace GTFS\Static\Entities;

use GTFS\Static\Entity;

class Translation extends Entity
{
    public ?string $table_name = null; // StringEnum

    public ?string $field_name = null;

    public ?string $language = null;

    public ?string $translation = null;

    public string|int $record_id;

    public string|int $record_sub_id;

    public ?string $field_value = null;
}