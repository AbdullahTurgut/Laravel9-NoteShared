<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public static function maincategorylist(){
        return Category::where('parent_id', '=' , 0)->with('children')->get();
    }


    public function index(){

        $sliderdata = Content::limit(4)->get();
        $contentlist1 = Content::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'contentlist1'=>$contentlist1
        ]);
    }

    public function content($id)
    {
        $sliderdata = Content::limit(4)->get();
        $data = Content::find($id);
        return view('home.content',[
            'sliderdata'=>$sliderdata,
            'data'=>$data
        ]);
    }

    public function categorycontents($id)
    {
        echo "Category Contents";
        exit();
        $sliderdata = Content::limit(4)->get();
        $data = Content::find($id);
        return view('home.content',[
            'sliderdata'=>$sliderdata,
            'data'=>$data
        ]);
    }
}
