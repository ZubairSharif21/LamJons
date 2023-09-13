@extends('web_layout.layout')
@section('title')
@endsection
@section('head')
<style>
    .reply-button{
    background-color: #000;
    padding: 0px 40px;a
    /* border-radius: 4px; */
    transition: .3s linear;
    color: rgb(5, 200, 218);
    font-weight: 700;
    border: none;
    font-family: 'Enriqueta', serif;
    font-size: 20px;
    min-width: 200px;
    }
    button {
  all: unset;
}
.reply-button:hover{
        background: #AF9492 !important;
        color: white !important;
    }
</style>
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
									<img src="{{asset('assets/img/logo-transparent.png')}}" class="img-fluid">
									<img src="{{asset('assets/img/headphones.png')}}" class="img-fluid">
                                    <form action="{{ route('message_send', ['id' => $id]) }}" method="POST">
                                        @csrf
                                    <div class="submit-btn big-button ">
                                        <div class="reply-button mt-5">
                                            <button type="submit" class="  p-1">
                                                Reply To Post</button>
                                            {{-- <div class="bg-button">
                                            </div>
                                            <div class="bg-button2">
                                            </div> --}}
                                        </div>
                                    </div>

								</div>
							</div>
							{{-- <div class="rockstar-img">
								<img src="{{ asset('assets/img/hired_gun.png') }}" class="img-fluid">
							</div> --}}
						</div>
					</div>

					<div class="col-md-7">

						<div class="form-looking">
							        <div class="col-md-9">
                                        <div class="input-field-main">
                                            {{-- <textarea style="height: 280px;border:2px solid black" name="message" placeholder="Describe yourself here..."> {{ old('message') }}</textarea> --}}
                                            <textarea name="message" style="border:2px solid black" name="message" id="user-message" class="form-control" cols="50" rows="15" placeholder="This is where a member will write their message">{{ old('message') }}</textarea>
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






