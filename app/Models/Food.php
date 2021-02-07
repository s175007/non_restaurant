<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    public $fillable = [
        'foodtype',
        'foodnamevn',
        'foodnamejp',
        'price',
        'image',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'foodtype' => 'integer',
        'foodnamevn' => 'string',
        'foodnamejp' => 'string',
        'price' => 'integer',
        'image' => 'string',
        'status' => 'boolean',
    ];

    public static $rule = [
        'foodnamevn' => 'required',
        'foodnamejp' => 'required',
        'price' => 'required',
        'image' => 'mimes:jpeg,jpg,png,svg|required|max:20000',
    ];

    public static $rule_update_missing_image = [
        'foodnamevn' => 'required',
        'foodnamejp' => 'required',
        'price' => 'required',
    ];

    public function foodTypes()
    {
        return $this->belongsTo('App\Models\FoodType', 'foodtype');
    }
}
