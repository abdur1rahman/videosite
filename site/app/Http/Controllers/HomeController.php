<?php

namespace App\Http\Controllers;

use App\visitorModel;
use Illuminate\Http\Request;
use App\HomeModel;

class HomeController extends Controller
{
    function Home (){
        $user_ip = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Dhaka');
        $timeDate = date('Y-m-d h:i:sa');

        visitorModel::insert(['Ip_Address'=>$user_ip,'visit_time'=>$timeDate]);
        $Getvideo = json_decode(HomeModel::all());
        return view('Home',[
            'videwDataKey'=>$Getvideo,
        ]);
    }
}

