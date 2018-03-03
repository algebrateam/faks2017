<?php

namespace App\Traits;

trait HasVoyagerRelationship
{
    public static function getRelationship($id)
    {
        return self::find($id);
    }
}