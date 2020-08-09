<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeModel;

class SearchController extends Controller
{
   function SearchControll(Request $request){
       $name =$request->input('search');
       $result = HomeModel::where('videwName','like','%'.$name.'%')->get();

       return view('Home',[
           'videwDataKey'=> $result,
       ]);
   }
}
