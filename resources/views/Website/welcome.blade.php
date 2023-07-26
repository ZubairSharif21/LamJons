@extends('web_layout.layout')
@section('head')
<style>
.wlcm-img{
    height: 190px;
}
#main-pages {
    background-color: #f2f71a;
 padding: 0em !important;
    height: 90vh;
}
.member-text{
    font-size: 50px;
    text-align: center;

}

</style>
@endsection
@section('title')
Welcome to LamJons
@endsection
@section('content')
<main>
	<section id="main-pages" class="">
<h1 class="text-center py-5">
    Congrats! <br>
You Have Joined
</h1>
        <div class="container w-25">

            <div class="logo-align ">
<div class="d-flex justify-content-between">
<div class="">
    <img src="./assets/img/logo.png" class="wlcm-img">
</div>
<div class="">
    <img src="./assets/img/headphones.png" class="wlcm-img">
</div>
</div>


    <h3 >
        You are Member Number: <br>
        {{ session('user')->id }}
    </h3>

	</section>
</main>

@endsection
