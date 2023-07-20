<?php

namespace GTFS\Static\Entity;

interface EntityInterface
{
    public static function fromArray(array $data): static;
}