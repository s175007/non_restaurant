<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $table = 'drinks';

    public $fillable = [
        'drink_type',
        'drink_name_vn',
        'drink_name_jp',
        'price',
        'image',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'drink_type' => 'integer',
        'drink_name_vn' => 'string',
        'drink_name_jp' => 'string',
        'price' => 'integer',
        'image' => 'string',
        'status' => 'boolean',
    ];

    public static $rule = [
        'drink_name_vn' => 'required',
        'drink_name_jp' => 'required',
        'price' => 'required',
        'image' => 'mimes:jpeg,jpg,png,svg|required|max:20000',
    ];

    public static $rule_update_missing_image = [
        'drink_name_vn' => 'required',
        'drink_name_jp' => 'required',
        'price' => 'required',
    ];

    public function drinkType()
    {
        return $this->belongsTo('App\Models\DrinkType', 'drink_type');
    }
}
