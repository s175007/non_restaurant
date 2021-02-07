<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\DrinkType;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DrinkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinktypes = DrinkType::all();
        return view('drinktypes/index', ['drinktypes' => $drinktypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drinktypes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),DrinkType::$rule)->validate();

        $drinktype = new DrinkType();
        $drinktype->name = $request->name;
        $drinktype->save();
        if(!empty($food)){
            return Redirect::route('admin.drinktypes.index')->with(['message'=> 'Tạo thành công']);
        }
            return Redirect::route('admin.drinktypes.index')->with(['message'=> 'Tạo không thành công']);
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
        $drinktype = DrinkType::find($id);
        return view('drinktypes/edit')->with(["drinktype" => $drinktype]);
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
        $drinktype = DrinkType::find($id);
        if(!empty($drinktype)){
            $drinktype->name = $request->name;
            $drinktype->save();
        }
        return Redirect::route('admin.drinktypes.index')->with(['success'=>'Cập nhật thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drinktype = DrinkType::find($id);
        if(!empty($drinktype)){
            $drinktype->delete();
            return Redirect::back()->with(['message' => "Xoá thành công"]);
        }
        return Redirect::back()->with(['message' => "Xoá thất bại"]);
    }
}
