<?php

namespace GTFS\Static\Contracts\Feed;

interface Field
{
    public function __construct(mixed $value);

    public function getValue(): mixed;

    public function setValue(mixed $value): static;
}