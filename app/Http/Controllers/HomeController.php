<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategorylist(){
        return Category::where('parent_id', '=' , 0)->with('children')->get();
    }


    public function index(){

        $sliderdata = Content::limit(4)->get();
        $contentlist1 = Content::limit(6)->get();
        $setting = Setting::first();

        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting,
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
        $sliderdata = Content::limit(4)->get();
        $category = Category::find($id);
        $contents=DB::table('contents')->where('category_id',$id)->get();
        return view('home.categorycontents',[
            'sliderdata'=>$sliderdata,
            'category'=>$category,
            'contents'=>$contents
        ]);
    }

    public function about(){
        $sliderdata = Content::limit(4)->get();
        $setting = Setting::first();

        return view('home.about',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting
        ]);
    }

    public function contact(){
        $setting = Setting::first();

        return view('home.contact',[
            'setting'=>$setting
        ]);
    }

    public function references(){
        $sliderdata = Content::limit(4)->get();
        $setting = Setting::first();

        return view('home.references',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting
        ]);
    }
}
