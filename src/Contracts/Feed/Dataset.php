<?php

namespace GTFS\Static\Contracts\Feed;

use GTFS\Static\Constants\DatasetType;

interface Dataset
{
    public function __construct(DatasetType $type);

    public function getType(): DatasetType;

//    public function getEntityClass(): string;

//    public function getEntities(): array;

//    public function newEntity(): Entity;

//    public function push(Entity $entity): static;
}