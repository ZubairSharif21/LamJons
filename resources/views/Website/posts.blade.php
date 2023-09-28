@extends('web_layout.layout')
@section('head')
<style>
#main-pages {
    background-color: #f2f71a;
    padding: 5em !important;
}
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
margin-top: 0px
}
.view-post{
font-size: 20px;
font-weight: 700;
color: rgb(99, 76, 76);
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
box-shadow: 5px 5px #888888;
background: #C4C2BA;
}
.view-post:hover{
    background: #5B2F2C;
    color: white !important
}
.logo{
    position: relative;
}
.headphones {
    position: absolute;
    top: 130px;
    left: 33%;
}
.bg-image{
    background-image: url('https://static.wixstatic.com/media/3978993e99184d5e8c21f0204cd07bca.png/v1/crop/x_0,y_0,w_150,h_150,q_85,enc_auto/3978993e99184d5e8c21f0204cd07bca.png');
    padding: 5em !important;
}
#main-pages{
    background: #D6BCBA !important;
    padding: 0 !important;
}
</style>
@endsection
@section('title')
Home Page
@endsection
@section('content')
<main id="main-pages">
<div  class="bg-image">

<div class="  text-center" >
</div>
<div class="container main-post" >
   <div class="row justify-content-between align-items-center">
  <div class="col-10 mx-auto">
    <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 text-center">
            <div class="logo ">
                <img src="{{ asset('assets/img/logo-transparent.png') }}" width="50%" alt="">
            </div>
            <div class="headphones">
                <img src="{{ asset('assets/img/headphones.png') }}" alt="" width="50%">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="{{ asset('assets/img/search-result.png') }}" width="70%" alt="">
        </div>
    </div>
  </div>
   </div>
    <div class="row" style="height: auto">
        <div class="col-lg-10 mx-auto">
                @if ($posts != null && count($posts) > 0)
                @foreach ($posts as $post)
                    {{-- <div class="card-body d-flex justify-content-between align-items-center crdbdy">
                        <div>
                            <p class="px-3"></p>
                        </div>
                        <a class="px-3" href="view_post/{{ $post->id }}">View Post</a>
                    </div>
                    <hr>
                     --}}


                     <div class="row mb-3 " style="background: #E8E6E6">
                        <div class="col-lg-6 col-md-12 col-sm-12 px-5 py-3"><h4>{{ \Illuminate\Support\Str::limit($post->message, 30, $end='...') }}</h4>
                        <p>{{ $post->first_name }}, {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</p></div>
                        <div class="col-lg-6 col-md-12 col-sm-12 px-5 py-2 d-flex align-items-center justify-content-end">
                            <a  class="text-dark  btn  py-2 view-post " href="view_post/{{ $post->id }}">View Post</a>
                        </div>
                     </div>

                @endforeach
            @else
                <h2 class="text-center py-3 ">No Posts Available Now</h2>
            @endif

        </div>
    </div>

</div>
</div>
</main>
@endsection
