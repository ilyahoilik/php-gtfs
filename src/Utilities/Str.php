<?php

namespace GTFS\Static\Utilities;

class Str
{
    public static function random(int $length = 8): string
    {
        return bin2hex(random_bytes($length));
    }
}