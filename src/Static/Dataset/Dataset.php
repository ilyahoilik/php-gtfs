<?php

namespace GTFS\Static\Dataset;

use GTFS\Static\Dataset\DatasetInterface;
use GTFS\Static\Entity\EntityInterface;

abstract class Dataset implements DatasetInterface
{
    public string $entity_class = '';

    protected array $entities = [];

    public function getEntityClass(): string
    {
        return $this->entity_class;
    }

    public function push(EntityInterface|array $entity): static
    {
        $this->entities[] = is_array($entity)
            ? $this->getEntityClass()::fromArray($entity)
            : $entity;

        return $this;
    }

    public function toArray(): array
    {
        return $this->entities;
    }

    public function fromArray(array $data): static
    {
        foreach ($data as $entity) {
            $this->push($entity);
        }

        return $this;
    }

    public static function getByFilename(string $filename): DatasetInterface
    {
        $classname = str_replace(' ', '', ucwords(str_replace('_', ' ', $filename)));

        $classname = 'GTFS\Static\Models\Datasets\\' . $classname;

        return new $classname;
    }
}