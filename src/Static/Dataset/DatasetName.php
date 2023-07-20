<?php

namespace GTFS\Static\Dataset;

enum DatasetName: string
{
    case Agency = 'agency';
    case Attributions = 'attributions';
    case CalendarDates = 'calendar_dates';
    case Calendar = 'calendar';
    case FareAttributes = 'fare_attributes';
    case FareRules = 'fare_rules';
    case FeedInfo = 'feed_info';
    case Frequencies = 'frequencies';
    case Levels = 'levels';
    case Pathways = 'pathways';
    case Routes = 'routes';
    case Shapes = 'shapes';
    case Stops = 'stops';
    case StopTimes = 'stop_times';
    case Transfers = 'transfers';
    case Translations = 'translations';
    case Trips = 'trips';
}