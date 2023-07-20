<?php

namespace GTFS\Static\Utils;

use GTFS\Static\Utils\Str;

class FileSystem
{
    public static function newTempPath(): string
    {
        $temp_dir = rtrim(sys_get_temp_dir(), '/');
        $temp_dir .= '/gtfs/' . Str::random();

        if (! file_exists($temp_dir)) {
            mkdir($temp_dir, 0777, true);
        }

        return rtrim($temp_dir, '/');
    }

    public static function newZipPath(): string
    {
        return static::newTempPath() . '/' . Str::random() . '.zip';
    }
}