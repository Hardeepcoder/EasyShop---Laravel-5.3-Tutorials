<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    
    public function add_product(Request $request){
          $file = $request->file('image');
        $filename = $file->getClientOriginalName();

        $path = 'upload/images';
        $file->move($path, $filename);

        $about = new about;
        $about->title = $request->title;
        $about->body = $request->body;
        $about->image = $filename;
        $about->save();
        return redirect()->action('AdminController@about_update')->with('status', 'Profile updated!');
    }
}
