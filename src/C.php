<?php

namespace Junyang7\C;

use Junyang7\B\B;

class C
{
    public static function doC()
    {
        var_dump("C:\t" . date("Y-m-d H:i:s"));
    }
    public static function doB()
    {
        B::doB();
    }
}
