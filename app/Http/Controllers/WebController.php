<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
$posts = Category::orderByDesc('created_at')->get();
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
        $request->session()->put('user', $user);
        return redirect(route('welcome'))->with('success','You have Signup Successfully');

    }
    public function profile(){

        $users=session('user');
        $user=User::where('id',$users->id)->first();
        return view('Website.artists',compact('user'));
    }
    public function edit_profile(){
        $users=session('user');
        $user=User::where('id',$users->id)->first();
        return view('Website.edit-artist',compact('user'));

    }
    public function update_profile(Request $request)
    {
    $request->validate([
        'profile_pic' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
        'first_image' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
        'second_image' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
        'second_image' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
        'third_image' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
        'four_image' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
        'five_image' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
        'background_image' => 'sometimes|required|file|mimes:jpg,png,jpeg|max:2048',
    ]);

    $session = session('user');
    if ($session) {
        $user = User::where('id', $session->id)->first();
$user->name=$request->username;
        // if ($request->hasFile('profile_pic')) {
        //     $user->profile_image = $request->file('profile_pic')->store('profile_images');
        // }

        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $fileName = $user->name.$user->id.'.jpg';
            $file->move(public_path('assets/user_profile'), $fileName);
            $user->profile_image = 'assets/user_profile/' . $fileName;
        }
        $user->description = $request->input('description');


        if ($request->hasFile('first_image')) {
            $file = $request->file('first_image');
            $fileName = $user->name.$user->id.'first_image.jpg';
            $file->move(public_path('assets/user_images'), $fileName);
            $user->first_image = 'assets/user_images/' . $fileName;
        }

        if ($request->hasFile('second_image')) {
            $file = $request->file('second_image');
            $fileName = $user->name.$user->id.'second_image.jpg';
            $file->move(public_path('assets/user_images'), $fileName);
            $user->second_image = 'assets/user_images/' . $fileName;
        }

        if ($request->hasFile('third_image')) {
            $file = $request->file('third_image');
            $fileName = $user->name.$user->id.'third_image.jpg';
            $file->move(public_path('assets/user_images'), $fileName);
            $user->third_image = 'assets/user_images/' . $fileName;
        }
        if ($request->hasFile('four_image')) {
            $file = $request->file('four_image');
            $fileName = $user->name.$user->id.'four_image.jpg';
            $file->move(public_path('assets/user_images'), $fileName);
            $user->four_image = 'assets/user_images/' . $fileName;
        }


        if ($request->hasFile('five_image')) {
            $file = $request->file('five_image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('assets/user_images'), $fileName);
            $user->five_image = 'assets/user_images/' . $fileName;
        }

        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $fileName = $user->name.$user->id.'background_image.jpg';
            $file->move(public_path('assets/user_profile'), $fileName);
            $user->background_image = 'assets/user_profile/' . $fileName;
        }
        // if ($request->hasFile('profile_pic')) {
        //     $file = $request->file('profile_pic');
        //     $fileName = $user->name.$user->id.'.jpg';
        //     $file->move(public_path('assets/user_profile'), $fileName);
        //     $user->profile_image = 'assets/user_profile/' . $fileName;
        // }
        $user->privacy = $request->input('privacy');
        $user->first_link = $request->input('first_link');
        $user->second_link = $request->input('second_link');
        $user->third_link = $request->input('third_link');
        $user->fourth_link = $request->input('fourth_link');
        $user->fifth_link = $request->input('fifth_link');
        $user->updated_at = now();
        $user->save();
$request->session()->put('user', $user);
return redirect()->back()->with('success','Profle has been updated');
    }
}
public function user_login(Request $request){
$request->validate([
'email'=>'required|exists:users,email|email',
'password'=>'required|string'
]);

$users=User::where('email',$request->email)->first();
if(Hash::check($request->password,$users->password)){
$request->session()->put('user', $users);
    return redirect()->route('welcome')->with('success','Congrats!
    You Have Joined Successfully '.$users->name.'!');
}
return redirect()->back()->withErrors('Credentials are not matching');

}
public function user_logout(Request $request){
session()->forget('user');
return redirect()->route('/')->with('success','Logout successfully');
}
public function message_send(Request $request){
    $request->validate(['message'=>'required|string']);
$sender=session('user')->name;
$content=$request->message;
Mail::raw($content, function ($message) {
    $message->to('zubair918sharif@gmail.com')
      ->subject(session('user')->email);
  });
return redirect()->back()->with('success',"Message has been sent to email");
}

        }

