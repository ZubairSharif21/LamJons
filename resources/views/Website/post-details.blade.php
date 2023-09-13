@extends('web_layout.layout')
@section('title')
Single-Post
:{{ $post->first_name }}
@endsection
@section('head')
<style>

h5{
    margin-bottom: 0px
}
main{
    min-height: 80vh;
    background: #A3D9F6 !important;
}
.apply{
    border: 2px solid rgb(245, 245, 245);
    background: black;
    display: flex;
    align-items: center;
    padding: 6px 15px;
    justify-content: space-between;
    text-align: center;
}
.apply:hover{
    background: brown;
    color: white;
}
.apply a {
    color: yellow;
    font-size: 20px;
    font-weight: bolder;
    display: flex;
    padding: 6px 15px;

    flex-shrink: 0;
}
.apply a:hover{
    color: white;
}
main{
    padding-bottom: 18px;
}
.section{
    padding-bottom: 5em;
}
</style>
@endsection
@section('content')
<main>

	<div class="container">
        <div class="row pt-5">
            <div class="col-8 mx-auto">
                <section class="section">
                    <div class="container py-5 " style="min-height: 50vh">
                        Post Date : <span class="text-danger">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</span>
                        <div class="row pt-2">
                            <div class="col-lg-10">
                                <h3>
                                    Author : {{ $post->first_name }}
                                    {{ $post->last_name }}
                                </h3>
                            </div>


                        </div>

                        <div class="row mt-5">
                            <h3> <span class="fs-5">{{ $post->message }}
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex justify-content-between mx-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="apply">

                                    <a  href="{{ route('browse_posts') }}" class="text-decoration-none">Back To Search</a>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="apply">
                                    <a  href="{{ route('applied', ['id' => $post->id]) }}" class="text-decoration-none">Reply Now</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

@endsection
