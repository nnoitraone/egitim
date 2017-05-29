git push -u origin master<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deneme extends Controller
{
    public function ajaxtest(){
      $msg = "Mesaj.";
      return response()->json(array('msg'=> $msg), 200);
    }
}
