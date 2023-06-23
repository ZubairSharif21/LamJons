<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.home');
    }
    function all_users(){
        $user=User::all();
        return view('admin.user.all_user',compact('user'));
    }
    function delete_user($id){
        $user=User::where('id',$id)->first();
        $user->delete();
        return redirect()->back()->with('success','Data has been deleted successfully');
    }
    function update_user($id){


        $user=User::where('id',$id)->first();
    return view('admin.user.update-user',compact('user'));
    }
    function view_user($id){
        $user=User::where('id',$id)->first();
    return view('admin.user.view-user',compact('user'));

    }
    public function add_user(){
        return 'new';
    }
    public function add_new_user( Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|min:8|max:16'
        ]);
        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->save();
        return redirect()->route('all_users')->with('success','User Has Been Added');
    }
    public function logout_admin(Request $request){
        Auth::logout();
        return redirect()->back()->with('message','Enter a Admin credentials ');
    }

    public function all_messages(){
        $messages=category::all();
        return view('admin.messages.all_messages',compact('messages'));
    }
    public function view_post($id){
        $post=category::where('id',$id)->first();
        return view('Website.post-details',compact('post'));
    }
    public function update_view($id){
        $post=category::where('id',$id)->first();
        return view('admin.messages.update_post',compact('post'));
    }
    public function update_post(Request $request,$id){
        $request->validate([
            'first_name'=>'required|string|max:25',
            'last_name'=>'required|string|max:25',
            'email'=>'required|email',
            'musical_genre'=>'required',
            'instrument'=>'required',
            'other_services'=>'required',
            'skills'=>'required',
            'message'=>'required',
        ]);


            $categories=category::where('id',$id)->first();
            $categories->first_name=$request->input('first_name');
            $categories->last_name=$request->input('last_name');
            $categories->email=$request->input('email');
            $categories->musical_genre=$request->input('musical_genre');
            $categories->instrument=$request->input('instrument');
            $categories->other_services=$request->input('other_services');
            $categories->skill_level=$request->input('skills');
            $categories->message=$request->input('message');
            $categories->update();
            return redirect()->back()->with('success','Data has been updated');
    }
    public function delete_post($id){
        $post=category::where('id',$id)->first();
        $post->delete();
        return redirect()->back()->with('success','Post has been deleted');
    }
}
