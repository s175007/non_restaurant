<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrinkType extends Model
{
    protected $table = 'drink_types';

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

    public function drinks()
    {
        return $this->hasMany('App\Models\Drink','drink_type');
    }

    // public static function boot()
    // {
    //     parent::boot();

    //     self::deleting(function (Drink $drinks) {

    //         foreach ($drinks->subcategory as $sub) {
    //             $sub->delete();
    //         }
    //     });
    // }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($drinkstype) {
            $drinkstype->drinks()->delete();
        });
    }
}
