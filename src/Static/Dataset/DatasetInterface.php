<?php

namespace GTFS\Static\Dataset;

use GTFS\Static\Entity\EntityInterface;

interface DatasetInterface
{
    public function getEntityClass(): string;

    public function push(EntityInterface|array $entity): static;

    public function toArray(): array;

    public function fromArray(array $data): static;
}