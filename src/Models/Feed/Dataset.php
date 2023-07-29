<?php

namespace GTFS\Static\Models\Feed;

use Exception;
use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Contracts\Feed\Dataset as DatasetContract;
use GTFS\Static\Contracts\Feed\Entity;

class Dataset implements DatasetContract
{
    protected array $entities = [];

    public function __construct(protected DatasetType $type) {}

    public function getType(): DatasetType
    {
        return $this->type;
    }

    protected function getEntityClass(): string
    {
        return 'GTFS\Static\Models\Feed\\' . $this->getType()->name;
    }

    public function push(Entity $entity): static
    {
        $this->entities[] = $entity;

        return $this;
    }

    public function pushArray(array $data): static
    {
        /** @var Entity $classname */
        $classname = $this->getEntityClass();

        return $this->push($classname::fromArray($data));
    }

//    public function getEntities(): array
//    {
//        return $this->entities;
//    }

//    public function newEntity(): Entity
//    {
//        $classname = $this->getEntityClass();
//
//        if (! class_exists($classname)) {
//            throw new Exception;
//        }
//
//        return new $classname;
//    }

//    public function push(Entity $entity): static
//    {
//        $this->entities[] = $entity;
//
//        return $this;
//    }
}