@extends('web_layout.layout')
@section('head')
<style>

.post {
background-color:yellow;
padding-top:30px;
height: 150px;
}
.post h1{
    font-size: 60px;
}
.main-post{
    height: auto;
}
.crdbdy{
    height: auto;
}
.crdbdy a{
    text-decoration: none;
    color:black;
border: 1px solid black;
padding: 10px;
background-color: yellow;
font-weight: bold;
}
.crdbdy a:hover{
background: brown;
color: white;
}
footer{
margin-top: 50px
}
</style>
@endsection
@section('title')
Home Page
@endsection
@section('content')
<div class="post text-center">
    <h1 >Looking For :</h1>
</div>
<div class="container main-post" >
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header"><h1 class="text-center">Posts</h1></div>
                @foreach ($posts as $post)
                <div class="card-body d-flex justify-content-between align-items-center crdbdy" >
<div class="">                    <h3> {{ $post->message }}</h3>
    <p class="px-3">{{ $post->first_name }},{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</p></div>
    <a class="px-3" href="view_post/{{ $post->id }}">View Post</a>
              </div>
              <hr>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
