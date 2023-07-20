<?php

namespace GTFS\Static\Archive\Concerns;

use GTFS\Static\Dataset\DatasetInterface;
use GTFS\Static\Entity\EntityInterface;

trait HasDatasets
{
    protected array $agency = [];
    protected array $attributions = [];
    protected array $calendar_dates = [];
    protected array $calendar = [];
    protected array $fare_attributes = [];
    protected array $fare_rules = [];
    protected array $feed_info = [];
    protected array $frequencies = [];
    protected array $levels = [];
    protected array $pathways = [];
    protected array $routes = [];
    protected array $shapes = [];
    protected array $stops = [];
    protected array $stop_times = [];
    protected array $transfers = [];
    protected array $translations = [];
    protected array $trips = [];

    public function getAgency(): array
    {
        return $this->agency;
    }

    public function setAgency(DatasetInterface $dataset): static
    {
        $this->agency[] = $dataset->toArray();

        return $this;
    }

    public function pushToAgency(EntityInterface $entity): static
    {
        $this->agency[] = $entity;

        return $this;
    }

    public function getAttributions(): array
    {
        return $this->attributions;
    }

    public function setAttributions(DatasetInterface $dataset): static
    {
        $this->attributions[] = $dataset->toArray();

        return $this;
    }

    public function pushToAttributions(EntityInterface $entity): static
    {
        $this->attributions[] = $entity;

        return $this;
    }

    public function getCalendarDates(): array
    {
        return $this->calendar_dates;
    }

    public function setCalendarDates(DatasetInterface $dataset): static
    {
        $this->calendar_dates[] = $dataset->toArray();

        return $this;
    }

    public function pushToCalendarDates(EntityInterface $entity): static
    {
        $this->calendar_dates[] = $entity;

        return $this;
    }

    public function getCalendar(): array
    {
        return $this->calendar;
    }

    public function setCalendar(DatasetInterface $dataset): static
    {
        $this->calendar[] = $dataset->toArray();

        return $this;
    }

    public function pushToCalendar(EntityInterface $entity): static
    {
        $this->calendar[] = $entity;

        return $this;
    }

    public function getFareAttributes(): array
    {
        return $this->fare_attributes;
    }

    public function setFareAttributes(DatasetInterface $dataset): static
    {
        $this->fare_attributes[] = $dataset->toArray();

        return $this;
    }

    public function pushToFareAttributes(EntityInterface $entity): static
    {
        $this->fare_attributes[] = $entity;

        return $this;
    }

    public function getFareRules(): array
    {
        return $this->fare_rules;
    }

    public function setFareRules(DatasetInterface $dataset): static
    {
        $this->fare_rules[] = $dataset->toArray();

        return $this;
    }

    public function pushToFareRules(EntityInterface $entity): static
    {
        $this->fare_rules[] = $entity;

        return $this;
    }

    public function getFeedInfo(): array
    {
        return $this->feed_info;
    }

    public function setFeedInfo(DatasetInterface $dataset): static
    {
        $this->feed_info[] = $dataset->toArray();

        return $this;
    }

    public function pushToFeedInfo(EntityInterface $entity): static
    {
        $this->feed_info[] = $entity;

        return $this;
    }

    public function getFrequencies(): array
    {
        return $this->frequencies;
    }

    public function setFrequencies(DatasetInterface $dataset): static
    {
        $this->frequencies[] = $dataset->toArray();

        return $this;
    }

    public function pushToFrequencies(EntityInterface $entity): static
    {
        $this->frequencies[] = $entity;

        return $this;
    }

    public function getLevels(): array
    {
        return $this->levels;
    }

    public function setLevels(DatasetInterface $dataset): static
    {
        $this->levels[] = $dataset->toArray();

        return $this;
    }

    public function pushToLevels(EntityInterface $entity): static
    {
        $this->levels[] = $entity;

        return $this;
    }

    public function getPathways(): array
    {
        return $this->pathways;
    }

    public function setPathways(DatasetInterface $dataset): static
    {
        $this->pathways[] = $dataset->toArray();

        return $this;
    }

    public function pushToPathways(EntityInterface $entity): static
    {
        $this->pathways[] = $entity;

        return $this;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function setRoutes(DatasetInterface $dataset): static
    {
        $this->routes[] = $dataset->toArray();

        return $this;
    }

    public function pushToRoutes(EntityInterface $entity): static
    {
        $this->routes[] = $entity;

        return $this;
    }

    public function getShapes(): array
    {
        return $this->shapes;
    }

    public function setShapes(DatasetInterface $dataset): static
    {
        $this->shapes[] = $dataset->toArray();

        return $this;
    }

    public function pushToShapes(EntityInterface $entity): static
    {
        $this->shapes[] = $entity;

        return $this;
    }

    public function getStops(): array
    {
        return $this->stops;
    }

    public function setStops(DatasetInterface $dataset): static
    {
        $this->stops[] = $dataset->toArray();

        return $this;
    }

    public function pushToStops(EntityInterface $entity): static
    {
        $this->stops[] = $entity;

        return $this;
    }

    public function getStopTimes(): array
    {
        return $this->stop_times;
    }

    public function setStopTimes(DatasetInterface $dataset): static
    {
        $this->stop_times[] = $dataset->toArray();

        return $this;
    }

    public function pushToStopTimes(EntityInterface $entity): static
    {
        $this->stop_times[] = $entity;

        return $this;
    }

    public function getTransfers(): array
    {
        return $this->transfers;
    }

    public function setTransfers(DatasetInterface $dataset): static
    {
        $this->transfers[] = $dataset->toArray();

        return $this;
    }

    public function pushToTransfers(EntityInterface $entity): static
    {
        $this->transfers[] = $entity;

        return $this;
    }

    public function getTranslations(): array
    {
        return $this->translations;
    }

    public function setTranslations(DatasetInterface $dataset): static
    {
        $this->translations[] = $dataset->toArray();

        return $this;
    }

    public function pushToTranslations(EntityInterface $entity): static
    {
        $this->translations[] = $entity;

        return $this;
    }

    public function getTrips(): array
    {
        return $this->trips;
    }

    public function setTrips(DatasetInterface $dataset): static
    {
        $this->trips[] = $dataset->toArray();

        return $this;
    }

    public function pushToTrips(EntityInterface $entity): static
    {
        $this->trips[] = $entity;

        return $this;
    }
}