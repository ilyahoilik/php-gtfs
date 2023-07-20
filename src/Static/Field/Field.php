<?php

namespace GTFS\Static\Field;

abstract class Field
{
    public function __construct(
        protected mixed $value = null
    ) {}

    public function get(): mixed
    {
        return $this->value;
    }

    public function set(mixed $value): static
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