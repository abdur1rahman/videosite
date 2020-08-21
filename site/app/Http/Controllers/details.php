<?php

namespace App\Http\Controllers;

use App\HomeModel;
use Illuminate\Http\Request;

class details extends Controller
{
    function  pageDetails(Request $request){
        $id = $request->id;
        $Getvideo = HomeModel::where('id',$id)->get();
        return view('DetailsPage',[
            'videwDataKey'=>$Getvideo,
        ]);
    }
    function  relatedvideo(){
        $Show = HomeModel::all();
        return view('DetailsPage',[
            'videwRelatedDataKey'=>$Show,
        ]);
    }
}
