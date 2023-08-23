<?php

namespace GTFS\Static\Constants;

use GTFS\Static\Entities;

enum DatasetType: string
{
    case Agency = 'agency';
    case Stops = 'stops';
    case Routes = 'routes';
    case Trips = 'trips';
    case StopTimes = 'stop_times';
    case Calendar = 'calendar';
    case CalendarDates = 'calendar_dates';
    case FareAttributes = 'fare_attributes';
    case FareRules = 'fare_rules';
    case Shapes = 'shapes';
    case Frequencies = 'frequencies';
    case Transfers = 'transfers';
    case Pathways = 'pathways';
    case Levels = 'levels';
    case FeedInfo = 'feed_info';
    case Translations = 'translations';
    case Attributions = 'attributions';

    public function getFilename(): string
    {
        return $this->value . '.txt';
    }

    public function getClass(): string
    {
        return match ($this->name) {
            'Agency' => Entities\Agency::class,
            'Stops' => Entities\Stop::class,
            'Routes' => Entities\Route::class,
            'Trips' => Entities\Trip::class,
            'StopTimes' => Entities\StopTime::class,
            'Calendar' => Entities\Calendar::class,
            'CalendarDates' => Entities\CalendarDate::class,
            'FareAttributes' => Entities\FareAttribute::class,
            'FareRules' => Entities\FareRule::class,
            'Shapes' => Entities\Shape::class,
            'Frequencies' => Entities\Frequency::class,
            'Transfers' => Entities\Transfer::class,
            'Pathways' => Entities\Pathway::class,
            'Levels' => Entities\Level::class,
            'FeedInfo' => Entities\FeedInfo::class,
            'Translations' => Entities\Translation::class,
            'Attributions' => Entities\Attribution::class,
        };
    }
}
