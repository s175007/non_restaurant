<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\DrinkType;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::with('drinkType')->get();
        // return $drinks;
        return view('drinks/index', ['drinks' => $drinks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drink_types = DrinkType::all();
        return view('drinks/create')->with('drink_types' , $drink_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),Drink::$rule)->validate();
        $path = Storage::disk('public')->put('images', $request->file('image'));

        $drink = new Drink();
        $drink->drink_type = $request->drink_types;
        $drink->drink_name_vn = $request->drink_name_vn;
        $drink->drink_name_jp = $request->drink_name_jp;
        $drink->price = $request->price;
        if ($request->has('status')){
            $drink->status = 1;
        }else{
            $drink->status = 0;
        }
        // $food->status = $request->has('status');
        $drink->image = $path;
        $drink->save();
        if(!empty($drink)){
            return Redirect::route('admin.drinks.index')->with(['message'=> 'Tạo thành công']);
        }
            return Redirect::route('admin.drinks.index')->with(['message'=> 'Tạo thành công']);
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
        $drink_types = DrinkType::all();
        $drink = Drink::find($id);
        return view('drinks/edit')->with(["drink" => $drink])->with(["drink_types" => $drink_types]);
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
            Validator::make($request->all(),Drink::$rule)->validate();
        }else{
            Validator::make($request->all(),Drink::$rule_update_missing_image)->validate();
        }

        $drink = Drink::find($id);
        if (!empty($drink)){
            $drink->drink_type = $request->drink_type;
            $drink->drink_name_vn = $request->drink_name_vn;
            $drink->drink_name_jp = $request->drink_name_jp;
            $drink->price = $request->price;
            if ($request->has('status')){
                $drink->status = 1;
            }else{
                $drink->status = 0;
            }
            if($request->hasFile('image')){
                $path = Storage::disk('public')->put('images', $request->file('image'));
                $drink->image = $path;
            }
            $drink->save();

        }
        return Redirect::route('admin.drinks.index')->with(['success'=>'Cập nhật thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drink = Drink::find($id);
        if(!empty($drink)){
            $drink->delete();
            return Redirect::back()->with(['message' => "Xoá thành công"]);
        }
        return Redirect::back()->with(['message' => "Xoá thất bại"]);
    }
}
