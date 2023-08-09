@extends('web_layout.layout')
@section('head')
<style>

label{
    font-weight: 800
}
</style>
@endsection
@section('title')
Sign in Lamjons
@endsection
@section('content')
<main class="bg-light">
	<section style="background-image: url('https://static.wixstatic.com/media/7520bdaefd38688f6c8df3723221fdff.png/v1/crop/x_0,y_0,w_75,h_78,q_85,enc_auto/7520bdaefd38688f6c8df3723221fdff.png')">
        <div class="" style="background-image: url('https://static.wixstatic.com/media/9e3665ff622ffc94a75bae8b04929b43.png/v1/crop/x_0,y_0,w_200,h_200,q_85,enc_auto/9e3665ff622ffc94a75bae8b04929b43.png')">
		<div class="container py-5">
			<div class="form-page-logo">
				<img src="{{ asset('assets/img/join.png') }}" class="img-fluid">
        </div>
			<div class="align-form">
				<div class="row">
					<div class="col-md-8">
						<div class="form-main">
							<form action="/signup_user" method="post">
                                @csrf
								<div class="row">
									<div class="col-md-6">
										<div class="input-field-main">
											<label>First Name*</label>
											<input type="text" name="first_name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-field-main">
											<label>Last Name*</label>
											<input type="text" name="last_name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-field-main">
											<label>City*</label>
											<input type="text" name="city">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-field-main">
											<label>State of country*</label>
											<input type="text" name="state">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-field-main">
											<label>Zip or postal code*</label>
											<input type="text" name="zip">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-field-main">
											<label>Password*</label>
											<input type="password" name="password">
										</div>
									</div>
									<div class="col-md-12">
										<div class="input-field-main">
											<label>Email*</label>
											<input type="email" name="email">
										</div>
									</div>
								</div>
								<div class="submit-btn">
									<div class="main-button">
										<button type="submit" class="custom-btn">Register</button>
										<div class="bg-button">
										</div>
										<div class="bg-button2">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<div class="right-form-text">
							  <a href="" class="typewrite" data-period="2000" data-type='[ "Where Musicians Meet Musicians.", "Where Creative People Connect.", "Where Musicians Meet Musicians.", "Where Collaboration Happens." ]'>
							    <span class="wrap"></span>
							  </a>
						</div>
						<div class="image-form">
							<img src="./assets/img/form-right.jpg" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
        </div>		</div>
	</section>
</main>

@endsection
