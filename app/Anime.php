<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'name', 'image', 'gender', 'year',
    ];

    public static function getGenders() {
        $genders = Anime::distinct()->pluck('gender')->toArray();
        $data = array();
        foreach ($genders as $item) {
            $data = array_merge($data, explode(" ",$item));
        }
        return collect($data)->unique()->values()->all();
    }
}
