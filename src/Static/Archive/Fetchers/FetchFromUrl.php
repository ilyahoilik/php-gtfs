<?php

namespace GTFS\Static\Archive\Fetchers;

use GTFS\Static\Archive\Fetchers\FetcherInterface;
use GTFS\Static\Utils\FileSystem;

class FetchFromUrl implements FetcherInterface
{
    protected ?string $destination = null;

    public function __construct(protected string $origin) {}

    public function fetch(): static
    {
        $this->destination = FileSystem::newZipPath();

        $this->download($this->destination);

        return $this;
    }

    public function path(): string
    {
        return $this->destination;
    }

    protected function download(string $destination): void
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->origin);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_REFERER, 'https://google.com');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $file = curl_exec($ch);
        curl_close($ch);

        $fp = fopen($destination, 'w');
        fwrite($fp, $file);
        fclose($fp);
    }
}