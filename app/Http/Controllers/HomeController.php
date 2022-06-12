<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategorylist(){
        return Category::where('parent_id', '=' , 0)->with('children')->get();
    }


    public function index(){

        $sliderdata = Content::limit(5)->get();
        $contentlist1 = Content::limit(8)->get();
        $setting = Setting::first();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting,
            'contentlist1'=>$contentlist1
        ]);
    }

    public function content($id)
    {
        $sliderdata = Content::limit(5)->get();
        $data = Content::find($id);
        $setting = Setting::first();
        $comments = Comment::where('content_id',$id)->where('status','True')->get();
        return view('home.content',[
            'sliderdata'=>$sliderdata,
            'data'=>$data,
            'setting'=>$setting,
            'comments'=>$comments
        ]);
    }

    public function categorycontents($id)
    {
        $sliderdata = Content::limit(5)->get();
        $category = Category::find($id);
        $contents=DB::table('contents')->where('category_id',$id)->get();
        return view('home.categorycontents',[
            'sliderdata'=>$sliderdata,
            'category'=>$category,
            'contents'=>$contents
        ]);
    }

    public function about(){
        $sliderdata = Content::limit(5)->get();
        $setting = Setting::first();

        return view('home.about',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting
        ]);
    }

    public function contact(){
        $sliderdata = Content::limit(5)->get();
        $setting = Setting::first();

        return view('home.contact',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting
        ]);
    }
    public function faq(){
        $sliderdata = Content::limit(5)->get();
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request){
        $data=new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent successfully, Thank You.');
    }

    public function storecomment(Request $request){
        //dd($request);
        $data=new Comment();
        $data->user_id = Auth::id(); // logged in user id
        $data->content_id = $request->input('content_id');
        $data->comment = $request->input('comment');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('content',['id'=>$request->input('content_id')])->with('success','Your comment has been sent successfully, Thank You.');
    }

    public function references(){
        $sliderdata = Content::limit(5)->get();
        $setting = Setting::first();

        return view('home.references',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting
        ]);
    }
    public function loginuser(){
        $sliderdata = Content::limit(5)->get();
        return view('home.login',[
            'sliderdata'=>$sliderdata
        ]);
    }
    public function registeruser(){
        $sliderdata = Content::limit(5)->get();
        return view('home.register',[
            'sliderdata'=>$sliderdata
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
