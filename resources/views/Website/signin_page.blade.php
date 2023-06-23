@extends('web_layout.layout')
@section('head')
<style>

</style>
@endsection
@section('title')
Sign in Lamjons
@endsection
@section('content')
<main>
	<section id="main-pages" class="lines-bg">
		<div class="container">
			<div class="form-page-logo">
				<img src="./assets/img/logo.png" class="img-fluid">
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
											<label>Pass-word*</label>
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
										<button type="submit" class="custom-btn">Post</button>
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
		</div>
	</section>
</main>

@endsection
