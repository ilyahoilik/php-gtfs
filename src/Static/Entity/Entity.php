<?php

namespace GTFS\Static\Entity;

abstract class Entity implements EntityInterface
{
    public static function fromArray(array $data): static
    {
        $object = new static;

        foreach ($data as $key => $value) {
            if (property_exists(static::class, $key)) {
                $object->$key->set($value);
            }
        }

        return $object;
    }

    public static function getByFilename(string $filename)
    {
        $classname = str_replace(' ', '', ucwords(str_replace('_', ' ', $filename)));

        $classname = 'GTFS\Static\Models\Entities\\' . $classname;

        return new $classname;
    }
}