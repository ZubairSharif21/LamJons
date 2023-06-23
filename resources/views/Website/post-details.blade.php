@extends('web_layout.layout')
@section('title')
{{ $post->first_name }}
@endsection
@section('head')
<style>
h5{
    margin-bottom: 0px
}

.apply{
    border: 1px solid black;
    background: yellow;
    width: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.apply:hover{
    background: brown;
    color: white;
}
.apply a{
    color: black;
}
.apply a:hover{
    color: white;
}
main{
    padding-bottom: 18px;
}
</style>
@endsection
@section('content')
<main>
	<section id="logo-section-main">
		<div class="container pt-5">
			<div class="main-text">

				<div class="logo-align">
					<img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" width="300px">
					<img src="{{ asset('assets/img/headphones.png') }}" class="img-fluid" width="300px">
					<h5  class="typewrite" data-period="2000" data-type='[ "Where Musicians Meet Musicians.", "Where Creative People Connect.", "Where Musicians Meet Musicians.", "Where Collaboration Happens." ]'>
						<span class="wrap"></span>
					</h5>
				</div>
			</div>
		</div>

    </section>
	<section id="about-us">
        <div class="container pt-5">
            <hr>
            Post Date : <span class="text-danger">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</span>
            <div class="row pt-2">
                <div class="col-lg-5">
                    <h3>
                        Author : {{ $post->first_name }}
                        {{ $post->last_name }}
                    </h3>
                </div>
                <div class="col-lg-5">
                    <h5>Contact Email : {{ $post->email }}</h5>
                </div>
                <div class="col-lg-2 apply">
                    <a target="blank" href="mailto:{{ $post->email }}" class="text-decoration-none ">Apply Now</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <h3>Musical Genre : {{ $post->musical_genre }}</h3>
                </div>
                <div class="col-lg-4"><h3>Instrument : {{ $post->instrument }}</h3></div>
                <div class="col-lg-4"><h3>Other Services : {{ $post->other_services }}</h3></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <h3>Skill Level : {{ $post->skill_level }}</h3>
                </div>
            </div>
            <div class="row mt-5">
                <h3>Message : <span class="fs-5 text-danger">{{ $post->message }}</span></h3>
            </div>
        </div>
	</section>
</main>

@endsection
