<?php

namespace GTFS\Static\Utilities;

use ReflectionClass;

class Reflection
{
    protected ReflectionClass $reflectionClass;

    public function __construct(string $classname)
    {
        $this->reflectionClass = new ReflectionClass($classname);
    }

    public function hasInterface(string $interface): bool
    {
        return $this->reflectionClass->implementsInterface($interface);
    }
}