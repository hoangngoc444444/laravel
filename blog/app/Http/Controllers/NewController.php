<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //


    public function testcontroller (Request $request, $id){
        echo 'bien nay ten la '. $id;
    }
}
