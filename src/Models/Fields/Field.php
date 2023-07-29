<?php

namespace GTFS\Static\Models\Fields;

use GTFS\Static\Contracts\Feed\Field as FieldContract;

abstract class Field implements FieldContract
{
    public function __construct(protected mixed $value = null) {}

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function setValue(mixed $value): static
    {
        $this->validate($value);

        $this->value = $value;

        return $this;
    }

    protected function validate(mixed $value): void
    {
        //
    }
}