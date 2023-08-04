<header>
	<div class="container">
		<div class="align-header-main">
			<div class="links-header">
<a href="/" class="logos"><img src="{{ asset('assets/img/house-chimney-solid.svg') }}" width="100px" alt=""></a>
			</div>
			<div class="header-social">
				<div class="align-icons-header">
					<div class="link-social-header">
						<a href="#"> <i class='bx bxl-instagram' ></i> </a>
					</div>
					<div class="link-social-header">
						<a href="#"> <i class='bx bxl-twitter' ></i> </a>
					</div>
					<div class="link-social-header">
						<a href="#"> <i class='bx bxl-patreon'></i> </a>
					</div>
				</div>
			</div>
			<div class="links-header text-right">
@if (session('user'))
<a href="{{ route('welcome') }}">Member Sign In</a>
<a href="{{ route('user-logout') }}">Logout</a>

@else
<a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
@endif
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" >
    Launch demo modal
  </button> --}}

		</div>
	</div>

</div>
<div class="bg-img-header">
    <img src="{{ asset('assets/img/download.svg') }}" class="img-fluid">
</div>
</header>





  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('user_login') }}" method="post">
            @csrf
        <div class="modal-body mx-3 text-start">
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
              <input type="email" id="defaultForm-email" name="email" placeholder="Your email here..." value="{{ old('email') }}" class="form-control validate">
            </div>

            <div class="md-form mb-4">
              <i class="fas fa-lock prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
              <input type="password" id="defaultForm-pass" name="password" placeholder="Your password here..."   class="form-control validate">
            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-default" type="submit">Login</button><br>
<span class="mx-3"> OR</span>
            <div class="">
    <a class="text-dark" href="{{ route('signin') }}">register new account</a>
</div>
        </div>
        </form>


      </div>
    </div>
  </div>
