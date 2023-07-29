<?php

namespace GTFS\Static\Utilities;

use GTFS\Static\Utilities\Str;

class FileSystem
{
    public static function newFolder(string $directory, int $permissions = 0777): string
    {
        if (! file_exists($directory)) {
            mkdir($directory, $permissions, true);
        }

        return rtrim($directory, '/');
    }

    public static function newTempFolder(string $folder): string
    {
        $temp_dir = rtrim(sys_get_temp_dir(), '/');
        $temp_dir .= '/' . $folder . '/' . Str::random();

        return static::newFolder($temp_dir);
    }

    public static function newRandomFile(string $folder = 'gtfs', string $extension = '.zip')
    {
        return static::newTempFolder($folder) . '/' . Str::random() . $extension;
    }
}