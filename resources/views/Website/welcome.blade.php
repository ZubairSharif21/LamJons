@extends('web_layout.layout')
@section('head')
    <style>
        .wlcm-img {
            height: 190px;
        }

        #main-pages {
            background-color: #f2f71a;
            padding: 0em !important;
            height: 90vh;
        }

        .member-text {
            font-size: 50px;
            text-align: center;

        }
        .main-buttons{
            background-color: #f2f71a !important;
        }
        @media screen and (min-width: 300px) and (max-width: 700px) {
  .row {
    flex-direction: column;
    align-items: center;
    padding-bottom: 20px   ;
  }
  .d-flex{
    flex-direction: column;
    margin-top: 25px;
    align-items: center;

  }
  #main-pages {
    height: auto;
  }
}
    </style>
@endsection
@section('title')
    Welcome to LamJons
@endsection
@section('content')
    <main>
        <section id="main-pages" class="">
<div class="row">
    <div class="col-lg-8 col-md-10">
        <h1 class="text-center py-5">
            Congrats! <br>
            You Have Joined
        </h1>
        <div class="container w-50">

            <div class="logo-align ">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <img src="./assets/img/logo.png" class="wlcm-img">
                    </div>
                    <div class="">
                        <img src="./assets/img/headphones.png" class="wlcm-img">
                    </div>
                </div>


                <h3>
                    You are Member Number: <br>
                    {{ session('user')->id }}
                </h3>

            </div>
    </div>
    </div>
    <div class="col-lg-2 ">
        <div class="d-flex h-100 justify-content-center align-items-center">
<div class="d-flex flex-column h-50 justify-content-around">
    <div class="main-button">
        <button type="button" class="custom-btn"><a href="{{ url('create_post') }}" class="text-decoration-none text-white">Create new Post</a></button>
        <div class="bg-button"></div>
        <div class="bg-button2"></div>
    </div>
<div class="main-button">
    <button type="button" class="custom-btn"><a href="{{ route('edit-profile') }}" class="text-decoration-none text-white">Create Bio-Post</a></button>
    <div class="bg-button"></div>
    <div class="bg-button2"></div>
</div>
</div>
</div>
</div>

</div>
        </section>
    </main>
@endsection
