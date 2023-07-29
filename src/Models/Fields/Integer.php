<?php

namespace GTFS\Static\Models\Fields;

use GTFS\Static\Models\Fields\Field;

class Integer extends Field
{
    public function getValue(): mixed
    {
        return intval(parent::getValue());
    }

    /**
     * Типы
     *
     * Integer
     * NonNegativeInteger
     * NonNullInteger
     * PositiveInteger
     */
}