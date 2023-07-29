<?php

namespace GTFS\Static\Models\Fields;

use GTFS\Static\Models\Fields\Field;

class Floaty extends Field
{
    public function getValue(): mixed
    {
        return floatval(parent::getValue());
    }

    /**
     * Типы
     *
     * Float
     * NonNegativeFloat
     * PositiveFloat
     */
}