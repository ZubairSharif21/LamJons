@extends('web_layout.layout')
@section('title')
@endsection
@section('content')

<main>
	<section id="main-pages" class="mix-lines">
		<div class="container">
			<div class="align-form-looking">
				<div class="row">
					<div class="col-md-5">
						<div class="about-looking-form">
							<div class="logo-main-looking">
								<div class="logo-align">
									<img src="./assets/img/logo-transparent.png" class="img-fluid">
									<img src="./assets/img/headphones.png" class="img-fluid">
								</div>
							</div>
							{{-- <div class="rockstar-img">
								<img src="{{ asset('assets/img/hired_gun.png') }}" class="img-fluid">
							</div> --}}
						</div>
					</div>
					<div class="col-md-7">
                        <form action="{{ route('message_send') }}" method="post">
                            @csrf
						<div class="form-looking">
							        <div class="col-md-12">
                                        <div class="input-field-main">
                                            <label>Message</label>
                                            <textarea style="height: 200px;" name="message"> {{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn big-button">
                                    <div class="main-button">
                                        <button type="submit" class="custom-btn">- Now Click This Button -</button>
                                        <div class="bg-button">
                                        </div>
                                        <div class="bg-button2">
                                        </div>
                                    </div>
                                </div>

                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection






