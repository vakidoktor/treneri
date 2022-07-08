<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $table = 'places';

    public static function getByVisited()
    {
        $designs = self::where('visited', 1)
            ->orderBy('name', 'asc')->get();

        return $designs;
    }
}
