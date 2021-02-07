<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodType;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::with('foodTypes')->get();
        // return $drinks;
        return view('foods/index', ['foods' => $foods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $food_types = FoodType::all();
        return view('foods/create')->with('food_types' , $food_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($request->hasFile('image')){
        //     return 'Co file';
        // }
        // return 'khong co file';
        Validator::make($request->all(),Food::$rule)->validate();
        $path = Storage::disk('public')->put('images', $request->file('image'));

        $food = new Food();
        $food->foodtype = $request->food_types;
        $food->foodnamevn = $request->foodnamevn;
        $food->foodnamejp = $request->foodnamejp;
        $food->price = $request->price;
        if ($request->has('status')){
            $food->status = 1;
        }else{
            $food->status = 0;
        }
        // $food->status = $request->has('status');
        $food->image = $path;
        // return $food;
        $food->save();
        if(!empty($food)){
            return Redirect::route('admin.foods.index')->with(['message'=> 'Tạo thành công']);
        }
            return Redirect::route('admin.foods.index')->with(['message'=> 'Tạo thành công']);
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
        $food_types = FoodType::all();
        $food = Food::find($id);
        return view('foods/edit')->with(["food" => $food])->with(["food_types" => $food_types]);
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
        if($request->hasFile('image')){
            Validator::make($request->all(),Food::$rule)->validate();
        }else{
            Validator::make($request->all(),Food::$rule_update_missing_image)->validate();
        }

        $food = Food::find($id);

        if (!empty($food)){
            $food->foodtype = $request->food_type;
            $food->foodnamevn = $request->foodnamevn;
            $food->foodnamejp = $request->foodnamejp;
            $food->price = $request->price;
            if ($request->has('status') || $request->status == 1){
                $food->status = 1;
            }else{
                $food->status = 0;
            }
            if($request->hasFile('image')){
                $path = Storage::disk('public')->put('images', $request->file('image'));
                $food->image = $path;
            }
            $food->save();
        }
        return Redirect::route('admin.foods.index')->with(['success'=>'Cập nhật thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        if(!empty($food)){
            $food->delete();
            return Redirect::back()->with(['message' => "Xoá thành công"]);
        }
        return Redirect::back()->with(['message' => "Xoá thất bại"]);
    }

    public function showmenu(){
        $foods = Food::all();
        return view('menu', ['foods' => $foods]);
    }
}
