<?php

namespace GTFS\Static\Services\Archive;

use GTFS\Static\Contracts\Archive\File;

class FetcherFromPath extends Fetcher
{
    public function fetch(): File
    {
        copy(
            $this->getSource(),
            $this->getDestination()->getPath()
        );

        return $this->getDestination();
    }
}