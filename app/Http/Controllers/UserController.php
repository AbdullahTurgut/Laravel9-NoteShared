<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderdata = Content::limit(4)->get();
        $setting = Setting::first();
        return view('home.user.index',[
            'sliderdata'=>$sliderdata,
            'setting' => $setting
        ]);
    }

    public function comments(){
        $comments = Comment::where('user_id','=', Auth::id())->get();
        $sliderdata = Content::limit(4)->get();
        $setting = Setting::first();
        return view ('home.user.comments',[
            'comments' => $comments,
            'sliderdata'=>$sliderdata,
            'setting' => $setting
        ]);
    }

    public function contents(){
        $contents = Content::where('user_id','=', Auth::id())->get();
        $sliderdata = Content::limit(4)->get();
        $setting = Setting::first();
        return view ('home.user.contents',[
            'contents' => $contents,
            'sliderdata'=>$sliderdata,
            'setting' => $setting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sliderdata = Content::limit(4)->get();
        $data= Category::all();
        $setting = Setting::first();
        return view('home.user.addcontentsuser',[
            'sliderdata'=>$sliderdata,
            'data' =>$data,
            'setting' => $setting
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Content();
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        if($request->file('file')){
            $data->file=$request->file('file')->store('files');
        }
        $data->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content,$id)
    {
        //
        $sliderdata = Content::limit(4)->get();
        $data= Content::find($id);
        $datalist = Category::all();
        return view('home.user.edit',[
            'data' => $data,
            'sliderdata'=>$sliderdata,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Content $content, $id)
    {
        //
        $data= Content::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->status = $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        if($request->file('file')){
            $data->file=$request->file('file')->store('files');
        }
        $data->save();
        return redirect(route('userpanel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function commentdestroy($id)
    {
        //
        $data= Comment::find($id);
        $data->delete();
        return redirect(route('userpanel.comments'));
    }
}
