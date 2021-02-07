<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tables';

    public $fillable = [
        'name',
        'number',
        'status'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'number' => 'string',
        'status' => 'string'
    ];

    // public static $rule = [
    //     'foodnamevn' => 'required',
    //     'foodnamejp' => 'required',
    //     'price' => 'required',
    //     'image' => 'mimes:jpeg,jpg,png,svg|required|max:20000',
    // ];

    // public static $rule_update_missing_image = [
    //     'foodnamevn' => 'required',
    //     'foodnamejp' => 'required',
    //     'price' => 'required',
    // ];
}
