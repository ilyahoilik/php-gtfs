<?php

namespace GTFS\Static\Models\Feed;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Contracts\Feed\Entity as EntityContract;

abstract class Entity implements EntityContract
{
    const DATASET_TYPE = null;

    public static function getType(): DatasetType
    {
        return static::DATASET_TYPE;
    }

    // @todo: нужно доделать возврат данных
    public function toArray(): array
    {
        return [];
    }

    public static function fromArray(array $data): static
    {
        $entity = new static;

        foreach ($data as $key => $value) {
            if (property_exists($entity, $key)) {
                $entity->$key->setValue($value);
            }
        }

        return $entity;
    }
}