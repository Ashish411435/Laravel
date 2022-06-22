<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function show($id)
    {
        // return "Hello From userController";
        return $id;
    }
}
