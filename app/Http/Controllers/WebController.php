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
        'category'=>'required',
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
        $categories->user_id=session('user')->id;
        $categories->category=$request->input('category');
        $categories->save();
        return redirect()->route('browse_posts')->with('success','Form has been submit');
    }

    public function user_search(Request $request) {
        $username = $request->input('username');
        $musicalGenre = $request->input('musical_genre');
        $instrument = $request->input('instrument');
        $otherServices = $request->input('other_services');

        $users = User::query();

        // Apply username filter if provided
        if ($username) {
            $users->where('name', 'LIKE', '%' . $username . '%');
        }


        if ($musicalGenre || $instrument || $otherServices) {
            $users->whereHas('category', function ($query) use ($musicalGenre, $instrument, $otherServices) {
                if ($musicalGenre) {
                    $query->where('musical_genre', $musicalGenre);
                }
                if ($instrument) {
                    $query->where('instrument', $instrument);
                }
                if ($otherServices) {
                    $query->where('other_services', $otherServices);
                }
            });
        }
        // Retrieve the users with applied filters
        $users = $users->where('account_type', 'user')->get();

        return view('Website.users', compact('users'));
    }


    public function posts(Request $request){
        $category=$request->input('category');
        $skills=$request->input('skills');
        $username=$request->input('username');
        $musical_genre=$request->input('musical_genre');
        $instrument=$request->input('instrument');
        $other_services=$request->input('other_services');
        // dd( $category, $skills, $username, $musical_genre,$instrument,$other_services);
        $categories = Category::query();
if ($category) {
    $categories->orWhere('category', $category);
}
if ($skills) {
    $categories->orWhere('skill_level', $skills);
}

if ($username) {
    $categories->orWhere('first_name', 'LIKE', '%' . $username . '%');
}

if ($musical_genre) {
    $categories->orWhere('musical_genre', $musical_genre);
}

if ($instrument) {
    $categories->orWhere('instrument', $instrument);
}

if ($other_services) {
    $categories->orWhere('other_services', $other_services);
}

$posts = $categories->get();
// Where('name', 'like', '%' . Input::get('name') . '%')->get()
        // $posts = Category::orderByDesc('created_at')->get();

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
    public function profile($id){
        $user=User::where('id',$id)->first();
        return view('Website.artists',compact('user'));
    }
    public function user_profile(){
        $users=session('user');
        $user=User::where('id',$users->id)->first();
        return view('Website.user-profile',compact('user'));

    }
      public function edit_profile(){
        $users=session('user');
        $user=User::where('id',$users->id)->first();
        return view('Website.edit-artist',compact('user'));

    }
    public function update_profile(Request $request)
    {
    $request->validate([
        'profile_pic' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
        'first_image' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
        'second_image' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
        'second_image' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
        'third_image' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
        'four_image' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
        'five_image' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
        'background_image' => 'sometimes|required|file|mimes:jpg,png,jpeg,webp,gif|max:2048',
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

public function apply($id){
$post=category::where('id',$id)->first();
$id=$post->id;
return view('Website.message',compact('id'));
}
    public function message_send(Request $request , $id){


    $request->validate(['message'=>'required|string']);
    $receiver=category::where('id',$id)->first();
    $sender=session('user')->email;
    $content='Message :'. $request->message;
    Mail::raw($content, function ($message) use ($receiver, $sender) {
        $message->to($receiver->email)
            ->subject('Message from ' . $sender);
    });




return redirect()->back()->with('success',"Message has been sent to email");
}

        }

