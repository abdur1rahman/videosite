<?php

namespace App\Http\Controllers;

use App\visitorModel;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use App\HomeModel;
use App\SeoModel;

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
    function HomeSeo(){
        $seo = SeoModel::all();
        SEOMeta::setTitle($seo[0]['title']);
        SEOMeta::setDescription($seo[0]['description']);

        OpenGraph::setDescription($seo[0]['description']);
        OpenGraph::setTitle($seo[0]['title']);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle($seo[0]['title']);

        JsonLd::setTitle($seo[0]['title']);
        JsonLd::setDescription($seo[0]['description']);
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');
        return view('Home');
    }
}

