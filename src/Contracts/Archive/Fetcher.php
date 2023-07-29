<?php

namespace GTFS\Static\Contracts\Archive;

interface Fetcher
{
    public function getDestination(): File;

    public function fetch(): File;
}