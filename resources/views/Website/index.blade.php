@extends('web_layout.layout')
@section('title')
lamjons
@endsection
@section('content')
<main>
	<section id="logo-section-main">
		<div class="container">
			<div class="logo-with-text">
				<div class="logo-text">
					<p>You have a project. But you can't do everything yourself. You need to collaborate. That's why we're here.</p>
				</div>
				<div class="logo-align">
					<img src="./assets/img/logo.png" class="img-fluid">
					<img src="./assets/img/headphones.png" class="img-fluid">
					<h3  class="typewrite" data-period="2000" data-type='[ "Where Musicians Meet Musicians.", "Where Creative People Connect.", "Where Musicians Meet Musicians.", "Where Collaboration Happens." ]'>
						<span class="wrap"></span>
					</h3>
				</div>
			</div>
		</div>
	</section>
	<section id="about-us">
		<div class="container">
			<div class="about-text">
				<h3>What is Lam Jones?</h3>
				<p>Lam Jones is collaboration. It is a website for musicians, artists and producers. A place to recruit the talent you need to execute your vision. Need a guitar riff to flesh out the song you've just recorded? Need that singer who can take your song to the next level? Need a mixer to make your track radio ready?                                               Lam Jones connects you with collaborators to get it done.</p>
			</div>
			<div class="top-button-adjust">
				<div class="main-button">
					<a href="{{ route('signin') }}"><button type="button" class="custom-btn">Join Lam Jones</button></a>
					<div class="bg-button"></div>
					<div class="bg-button2"></div>
				</div>
				<div class="main-button">
					<button type="button" class="custom-btn"><a href="browse_posts" class="text-decoration-none text-white">Browse Posts</a></button>
					<div class="bg-button"></div>
					<div class="bg-button2"></div>
				</div>
			</div>
			<div class="new-buttons-main">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="main-button">
							<button type="button" class="custom-btn"><a href="looking-for" class="text-decoration-none text-white">Looking For</a></button>
							<div class="bg-button"></div>
					<div class="bg-button2"></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="main-button">
							<button type="button" class="custom-btn"><a href="available" class="text-decoration-none text-white">Available</a>	</button>
							<div class="bg-button"></div>
					<div class="bg-button2"></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="main-button">
							<button type="button" class="custom-btn"><a href="hired-gun" class="text-decoration-none text-white">Hired Guns</a></button>
							<div class="bg-button"></div>
					<div class="bg-button2"></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="main-button">
							<button type="button" class="custom-btn"><a href="forum" class="text-decoration-none text-white">Forum</a></button>
							<div class="bg-button"></div>
					<div class="bg-button2"></div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="main-button">
							<button type="button" class="custom-btn"><a href="{{ route('profile') }}" class="text-decoration-none text-white">
                                Browse Artists</a></button>
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
