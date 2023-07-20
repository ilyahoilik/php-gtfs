<?php

namespace GTFS\Static\Models\Datasets;

use GTFS\Static\Dataset\Dataset;
use GTFS\Static\Models\Entities\FeedInfo as EntitiesFeedInfo;

class FeedInfo extends Dataset
{
    public string $entity_class = EntitiesFeedInfo::class;
}