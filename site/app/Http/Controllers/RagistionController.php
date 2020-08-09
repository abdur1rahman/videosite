<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
class RagistionController extends Controller
{
    function Contact(){
        return view('Ragistion');
    }
    function contactSend(Request $request){
        $name = $request->input('name');
        $pass = $request->input('pass');
        $phon = $request->input('phon');
        $bkas = $request->input('bkas');
        $trNo = $request->input('trNo');
       $result = ContactModel::insert([
           'UserName'=>$name,
           'Password'=>$pass,
           'Phone'=>$phon,
           'BkasNo'=>$bkas,
           'TranId'=>$trNo,
       ]);
       if($result==true){
           return 1;
       }else{
           return 0;
       }
    }
}
