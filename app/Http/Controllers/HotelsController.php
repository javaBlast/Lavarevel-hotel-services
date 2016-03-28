<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotels;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class HotelsController extends Controller
{
    public function add()
    {
        return view('add', ['hotels' => Hotels::all()]);
    }

    public function save(Request $request)
    {

        $hotel = new Hotels();
        $hotel->preview = implode(';', $request->preview); //массив с ссылками переводим в строку, что бы сохранить в базу.
        $hotel->title = $request->title;
        $hotel->description = $request->description;
        $hotel->price = $request->price;
        $hotel->save();

        return back();
    }

    public function delete($id)
    {
        Hotels::findOrFail($id)->delete();

        return back();
    }
    
    public function show($id){
        $parameters = DB::select('select * from hotels where id = ?',[$id]);//получаем все параметры
        $images=explode(';',$parameters[0]->preview); //ссылки на картинки передаем отдельным массивом
        return view('show', ['hotels' => $parameters,'images'=>$images]);
    }
    
    public function lists()
    {
        return view('lists', ['hotels' => Hotels::all()]);
    }
    
}
