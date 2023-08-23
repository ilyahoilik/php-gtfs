<?php

namespace GTFS\Static;

use GTFS\Static\Exceptions\InvalidPropertyNameException;

abstract class Entity
{
    /**
     * @throws InvalidPropertyNameException
     */
    public function __construct(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            } else throw new InvalidPropertyNameException;
        }
    }
}