<header>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

        <div class="align-header-main">
            <div class="links-header">
                <a href="/" ><img src="{{ asset('assets/img/home-logo.png') }}" width="100px"
                        alt=""></a>
                    {{-- <a href="{{ route('faq') }}" class="text-center">FAQ</a> --}}

            </div>
            <div class="header-social">
                <div class="align-icons-header">
                    <div class="link-social-header">
                        <a href="#"> <i class='bx bxl-instagram'></i> </a>
                    </div>
                    <div class="link-social-header">
                        <a href="#"> <i class='bx bxl-facebook'></i> </a>
                    </div>
                    <div class="link-social-header">
                        <a href="#"> <i class='bx bxl-twitter'></i> </a>
                    </div>
                    <div class="link-social-header">
                        <a href="#"> <i class='bx bxl-patreon'></i> </a>
                    </div>
                </div>
            </div>
            <div class="links-header text-right">
                @if (session('user'))
                    <a href="{{ route('user-logout') }}">Logout</a>
                @else
                    <a href="javascript:void()" class="text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Member Sign In</a>
                    <a href="javascript:void()" >Lam Jones Merch</a>
                @endif
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-primary" >
    Launch demo modal
  </button> --}}

            </div>
        </div>
    </div>
</div>

    </div>
    <div class="bg-img-header">
        <img src="{{ asset('assets/img/download.svg') }}" class="img-fluid">
    </div>
</header>

<!-- Modal -->
<div class="modal fade bg-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " style="max-width:680px ">
        <div class="modal-content" style="background-image: url('https://static.wixstatic.com/media/3978993e99184d5e8c21f0204cd07bca.png/v1/crop/x_0,y_0,w_150,h_150,q_85,enc_auto/3978993e99184d5e8c21f0204cd07bca.png') !important; background-color:#68AAFB">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-between"> <!-- Use col-lg-6 class for larger screens -->
                            <img src="https://static.wixstatic.com/media/95c157_62f84e5f3a3c4883af3030d80d7ea731~mv2.png/v1/fill/w_186,h_87,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Illus%20Lam%20Jones%20Logo.png" alt="">
                            <form action="{{ route('user_login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                                    <input type="email" id="defaultForm-email" required name="email"
                                        placeholder="Your email here..." value="{{ old('email') }}"
                                        class="form-control validate">
                                </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-between"> <!-- Use col-lg-6 class for larger screens -->
                            <img src="{{ asset('assets/img/welcome.png') }}" alt="">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                                <input type="password" id="defaultForm-pass" required name="password"
                                    placeholder="Your password here..." class="form-control validate">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Login</button>
                        <br>
                        <div class="mx-3 text-end text-white"> or <a class="text-white" href="{{ route('signin') }}">
                                register new account</a></div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


