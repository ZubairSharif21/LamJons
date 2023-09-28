@extends('web_layout.layout')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .wlcm-img {
            height: 190px;
        }

        .p-page {
            height: auto !important;
        }

        #main-pages {
            background-color: #f2f71a;
            padding: 0em !important;
            /* height: 90vh; */
        }

        .member-text {
            font-size: 50px;
            text-align: center;

        }

        header {
            background-color: #000;
            padding: 5px 0 !important;
        }

        .background-image img {
            height: 253px !important;
            margin-top: 70px !important;
            position: relative;
            object-fit: fill;
        }

        .links {
            background: lavender;
            padding: 10px;
            border-radius: 15%;
            margin: 20px
        }

        .texts {
            display: flex;
            justify-content: space-around;
        }

        .texts p {
            line-height: 2.0;
            height: auto !important;
            background: #ffff45b0;
            padding: 25px;
        }

        .link-tags {

            font-weight: bold;
            line-height: 2.4;
        }

        .link-tags li {
            list-style-type: none;
        }

        .profile {
    margin: 20px auto;
    max-width: 164px;
    position: absolute;
    top: 25vh;
    left: 46vw;
    border-radius: 50%;
}


        .profile img {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            height: auto;
        }



        header {
            background-color: #000;
            padding: 20px 0;
            position: absolute !important;
            top: 0px !important;
            width: 100% !important;
            z-index: 11 !important;
        }

        .carasoul img {
            width: 100% !important;
            height: 100% !important;
        }
    </style>
@endsection
@section('title')
    User Profile
@endsection
@section('content')
    <main>

        <section id="main-pages p-page" class="">
            <div class="mb-5">
                <div class="background-image">
                    @if ($user->background_image)
                        <img src="{{ asset($user->background_image) }}" alt="" class="w-100 mt-1">
                    @else
                        <img src="{{ asset('assets/img/background-img.webp') }}" alt="" class="w-100 mt-1">
                    @endif
                </div>

                <div class="profile">
                    @if ($user->profile_image)
                        <img id="blah"src="{{ asset($user->profile_image) }}" alt="Image not Found"
                            style="width: 150px !important;height: 150px !important;background:#cfcfcf !important">
                    @else
                        <img id="blah"src="{{ asset('assets/user_images/default.png') }}" alt="Image not Found"
                            style="width: 150px !important;height: 150px !important;background:#cfcfcf !important">
                    @endif

                </div>


            </div>
            <div class="container">
                <div class="row mt-4 texts">
                    <div class="col-lg-6 col-md-12">
                        <br>
                        <h2 class="fw-bold">{{ $user->name }}</h2>


                        <p class="fw-bold">
                            @if ($user->description)
                                {{ $user->description }}
                            @else
                                <span class="text-info">User has not added description yet</span>
                            @endif
                        </p>
                    </div>
                    <div class="col-lg-5  col-md-12">
                        <button class="links rounded-pill bg-light fw-bold">
                            Upload song, video, or social profile links here:</button>
                        <div class=" link-tags">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <h5>Why are you flagging this profile?</h5>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox1">Option 1</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                            value="option1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox2">Option 2</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                            value="option2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="inlineCheckbox3">Option 3</label>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3">
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <button class="links -light fw-bold  mt-5 ">
                                    {{-- <a href="{{ route('message') }}">Message "{{ $user->name }}"</a></button> --}}
                                    {{ $user->name }}
                                    @if ($user->first_link)
                                        <li>
                                            <a href="{{ $user->first_link }}">This is my Facebook page with other songs.
                                            </a>

                                        </li>
                                    @endif
                                    @if ($user->second_link)
                                        <li>
                                            <a href="{{ $user->second_link }}">This is my Facebook page with other songs.
                                            </a>

                                        </li>
                                    @endif
                                    @if ($user->third_link)
                                        <li>
                                            <a href="{{ $user->third_link }}">This is my Facebook page with other songs.
                                            </a>

                                        </li>
                                    @endif
                                    @if ($user->fourth_link)
                                        <li>
                                            <a href="{{ $user->fourth_link }}">This is my Facebook page with other songs.
                                            </a>

                                        </li>
                                    @endif


                            </ul>
                        </div>

                        <div class="mt-5 ps-4">
                            <div class="d-flex justify-content-arround align-items-center">
                                <div class="radios">
                                    <h5>Select profile privacy</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" disabled type="radio" name="privacy"
                                            id="exampleRadios1" {{ $user->privacy == 'public' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Public
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" disabled type="radio" name="privacy"
                                            id="exampleRadios2" {{ $user->privacy == 'private' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Private
                                        </label>
                                    </div>
                                </div>
                                <div class="ps-5">
                                    <h5>This is flag</h5>
                                    <img src="https://static.wixstatic.com/media/95c157_fbf1b8478fd94b0eada94413c9b18878~mv2.png/v1/fill/w_70,h_48,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Pirate%20Flag%20Graphic.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('edit-profile') }}"> <button class="links rounded-pill bg-info fw-bold">
                                Edit Profile</button></a>
                    </div>
                </div>
                <div class="carasoul">
                    <div class="col-lg-10 col-md-12 text-center mt-5 pb-5" style="padding-bottom: 84px !important;">
                        <div class="d-flex justify-content-between" style="height: 200px !important">

                            @if ($user->first_image)
                                <div class="col-lg-2 col-md-12">
                                    <img src="{{ $user->first_image }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @else
                                <div class="col-lg-2 col-md-12">
                                    <img src="{{ asset('assets/PlaceHolder.png') }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @endif
                            @if ($user->second_image)
                                <div class="col-lg-2 col-md-12">
                                    <img src="{{ $user->second_image }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @else
                                <div class="col-lg-2 col-md-12">
                                    <img src="{{ asset('assets/PlaceHolder.png') }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @endif
                            @if ($user->third_image)
                                <div class="col-lg-2 col-md-12">
                                    <img src="{{ $user->third_image }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @else
                                <div class="col-lg-2 col-md-12">
                                    <img src="{{ asset('assets/PlaceHolder.png') }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @endif
                            @if ($user->four_image)
                                <div class="col-lg-2 col-md-6">
                                    <img src="{{ $user->four_image }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @else
                                <div class="col-lg-2 col-md-6">
                                    <img src="{{ asset('assets/PlaceHolder.png') }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @endif
                            @if ($user->five_image)
                                <div class="col-lg-2 col-md-6">
                                    <img src="{{ $user->five_image }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @else
                                <div class="col-lg-2 col-md-6">
                                    <img src="{{ asset('assets/PlaceHolder.png') }}" width="200px" alt="..."
                                        class="img-thumbnail">

                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
