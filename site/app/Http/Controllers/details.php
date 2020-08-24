<?php

namespace App\Http\Controllers;

use App\HomeModel;
use Illuminate\Http\Request;

class details extends Controller
{
    function  pageDetails(Request $request){
        $id = $request->id;
        $Show = HomeModel::where('id',$id)->first();
        $ShowSide = HomeModel::all();
        return view('DetailsPage',['detailsKey'=>$Show, 'DetailsSideVideo'=>$ShowSide]);
    }

    function  pageDetailsSidvideo(){
        $ShowSide = HomeModel::all();
        return view('DetailsPage',[
            'DetailsSideVideo'=>$ShowSide,
        ]);
    }

}
