<?php

namespace Classes;

class Security
{
    public static function htmlentities($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}