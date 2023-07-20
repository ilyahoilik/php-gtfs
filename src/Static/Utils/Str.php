<?php

namespace GTFS\Static\Utils;

class Str
{
    public static function random(int $length = 8): string
    {
        return bin2hex(random_bytes($length));
    }
}