<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $sliderdata = Content::limit(5)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata
        ]);
    }
}
