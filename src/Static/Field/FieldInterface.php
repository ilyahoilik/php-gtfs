<?php

namespace GTFS\Static\Field;

interface FieldInterface
{
    public function __construct(mixed $value = null);

    public function get(): mixed;

    public function set(mixed $value): static;
}