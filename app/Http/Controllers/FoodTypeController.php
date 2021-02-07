<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodType;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodtypes = FoodType::all();
        // return $foodtypes;
        return view('foodtypes/index', ['foodtypes' => $foodtypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foodtypes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),FoodType::$rule)->validate();

        $foodtype = new FoodType();
        $foodtype->name = $request->name;
        $foodtype->save();
        if(!empty($food)){
            return Redirect::route('admin.foodtypes.index')->with(['message'=> 'Tạo thành công']);
        }
            return Redirect::route('admin.foodtypes.index')->with(['message'=> 'Tạo không thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foodtype = FoodType::find($id);
        return view('foodtypes/edit')->with(["foodtype" => $foodtype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $foodtype = FoodType::find($id);
        if(!empty($foodtype)){
            $foodtype->name = $request->name;
            $foodtype->save();
        }
        return Redirect::route('admin.foodtypes.index')->with(['success'=>'Cập nhật thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodtype = FoodType::find($id);
        if(!empty($foodtype)){
            $foodtype->delete();
            return Redirect::back()->with(['message' => "Xoá thành công"]);
        }
        return Redirect::back()->with(['message' => "Xoá thất bại"]);
    }
}
