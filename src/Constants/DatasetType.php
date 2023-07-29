<?php

namespace GTFS\Static\Constants;

enum DatasetType: string
{
    case Agency = 'agency';
    case Attribution = 'attributions';
    case Calendar = 'calendars';
    case CalendarDate = 'calendar_dates';
    case FareAttribute = 'fare_attributes';
    case FareRule = 'fare_rules';
    case FeedInfo = 'feed_info';
    case Frequency = 'frequencies';
    case Level = 'levels';
    case Pathway = 'pathways';
    case Route = 'routes';
    case Shape = 'shapes';
    case Stop = 'stops';
    case StopTime = 'stop_times';
    case Transfer = 'transfers';
    case Translation = 'translations';
    case Trip = 'trips';

    public function getClassname(): string
    {
        return "GTFS\Static\Models\Feed\\" . $this->name;
    }

    public function getFilename(): string
    {
        return $this->value . '.txt';
    }

    public static function fromFilename(string $filename): self
    {
        return self::from(str_replace('.txt', '', $filename));
    }
}