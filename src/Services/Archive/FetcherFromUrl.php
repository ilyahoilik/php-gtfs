<?php

namespace GTFS\Static\Services\Archive;

use GTFS\Static\Contracts\Archive\File;

class FetcherFromUrl extends Fetcher
{
    public function fetch(): File
    {
        $this->download();

        return $this->getDestination();
    }

    protected function download(): void
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, (string) $this->getSource());
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_REFERER, 'https://google.com');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $file = curl_exec($ch);
        curl_close($ch);

        $fp = fopen($this->getDestination()->getPath(), 'w');
        fwrite($fp, $file);
        fclose($fp);
    }
}