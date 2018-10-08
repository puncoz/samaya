<?php

namespace Puncoz\Samaya\Traits;

trait Creator
{
    public static function now($tz = null)
    {
        return new static(null, $tz);
    }
}
