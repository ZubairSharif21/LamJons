<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function HomePage(){
        return view('Website.index');
    }
    public function form_submission(Request $request){
        $request->validate([
        'first_name'=>'required|string|max:25',
        'last_name'=>'required|string|max:25',
        'email'=>'required|email|unique:categories,email',
        'musical_genre'=>'required',
        'instrument'=>'required',
        'other_services'=>'required',
        'skills'=>'required',
        'message'=>'required',
        ]);


        $categories=new category();
        $categories->first_name=$request->input('first_name');
        $categories->last_name=$request->input('last_name');
        $categories->email=$request->input('email');
        $categories->musical_genre=$request->input('musical_genre');
        $categories->instrument=$request->input('instrument');
        $categories->other_services=$request->input('other_services');
        $categories->skill_level=$request->input('skills');
        $categories->message=$request->input('message');
        $categories->save();
        return redirect()->back()->with('success','Form has been submit');
    }
    public function posts(){
        $posts=category::all();
        return view('Website.posts',compact('posts'));
    }
    public function single_post($id){
        $post=category::where('id',$id)->first();
        return view('Website.post-details',compact('post'));
    }
    public function signup_user(Request $request){
        $request->validate([
            'email'=>'required|unique:users,email|email',
            'password'=>'required',
        ]);
        $user=new User();
        $user->email=$request->email;
        $user->password=$request->password;
        $user->name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->city=$request->city;
        $user->state=$request->state;
        $user->zip=$request->zip;
        $user->account_type='user';
        $user->save();
        return redirect()->back()->with('success','You have Signup Successfully');

    }
}
