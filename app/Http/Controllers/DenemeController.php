<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function ajaxtest()
    {

        $msg = "test2";
        return [$msg];

    }
}