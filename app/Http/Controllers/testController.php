<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class testController extends Controller


{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function gettest(){



    		return 'OK';
    }
}
