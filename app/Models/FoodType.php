<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $table = 'food_types';

    public $fillable = [
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];

    public static $rule = [
        'name' => 'required'
    ];

    public function foods()
    {
        return $this->hasMany('App\Models\Food','foodtype');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($foodtypes) {
            $foodtypes->foods()->delete();
        });
    }
}
