@extends('web_layout.layout')
@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        textarea {
            resize: vertical;
            width: 100% !important;
        }

        .wlcm-img {
            height: 190px;
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

.images_footer img{
max-height: 140px;
min-height: 140px;
}

        .links {
            background: lavender;
            padding: 10px;
            border-radius: 50%;
            margin: 20px
        }

        .texts {
            display: flex;
            justify-content: space-around;
        }

        .texts p {
            line-height: 2.0;
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
            top: 30vh;
            left: 44vw;
            border-radius: 50%;
        }

        .profile:hover .overlay {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .profile:hover .overlay p {
            display: block;
        }

        .profile img {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            height: auto;
        }

        .profile .overlay {
            position: absolute;
            width: 100%;
            bottom: 0;
            overflow: hidden;

            border-radius: 50%;
            height: 100% !important;
        }

        .profile .overlay input {
            width: 100%;
            position: absolute;
            opacity: 0;
            bottom: 20px;
            z-index: 2;
            cursor: pointer;
        }

        .profile .overlay p {
            position: absolute;
            bottom: 10px;
            font-weight: bold;
            text-align: center;
            color: #fff;
            width: 100%;
            display: none;
        }

        header {
            background-color: #000;
            padding: 20px 0;
            position: absolute !important;
            top: 0px !important;
            width: 100% !important;
            z-index: 11 !important;
        }
    </style>
@endsection
@section('title')
    Welcome to LamJons
@endsection
@section('content')
    <main>
        <section id="main-pages" class="">
            <div class="mb-5">
                <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="background-image">
                        <img src="{{ asset($user->background_image) }}" alt="" class="w-100 mt-1">
                    </div>

                    <div class="profile">
                        <img id="blah"src="{{ asset($user->profile_image) }}" alt="Image not Found"
                            style="width: 150px !important;height: 150px !important;background:#cfcfcf !important">
                        <div class="overlay">
                            <input id="imgInp" type="file" name="profile_pic">
                            <p>Change Picture <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M213.1 64.8L202.7 96H128c-35.3 0-64 28.7-64 64V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H437.3L426.9 64.8C420.4 45.2 402.1 32 381.4 32H258.6c-20.7 0-39 13.2-45.5 32.8zM448 256c0 8.8-7.2 16-16 16H355.3c-6.2 0-11.3-5.1-11.3-11.3c0-3 1.2-5.9 3.3-8L371 229c-13.6-13.4-31.9-21-51-21c-19.2 0-37.7 7.6-51.3 21.3L249 249c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l19.7-19.7C257.4 172.7 288 160 320 160c31.8 0 62.4 12.6 85 35l23.7-23.7c2.1-2.1 5-3.3 8-3.3c6.2 0 11.3 5.1 11.3 11.3V256zM192 320c0-8.8 7.2-16 16-16h76.7c6.2 0 11.3 5.1 11.3 11.3c0 3-1.2 5.9-3.3 8L269 347c13.6 13.4 31.9 21 51 21c19.2 0 37.7-7.6 51.3-21.3L391 327c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-19.7 19.7C382.6 403.3 352 416 320 416c-31.8 0-62.4-12.6-85-35l-23.7 23.7c-2.1 2.1-5 3.3-8 3.3c-6.2 0-11.3-5.1-11.3-11.3V320z" />
                                </svg></p>
                        </div>
                    </div>

            </div>
            <div class="container">
                <div class="row mt-4 texts">
                    <div class="col-6">
                        <br>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Username</label>
                            <input type="text" name="username" value="{{ $user->name }}" class="form-control"
                                id="exampleInputUsername1" aria-describedby="UsernameHelp">
                        </div>

                        <p class="fw-bold">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Description</label>
                            <textarea name="description" id="description" cols="85" rows="10"> {{ $user->description }}</textarea>
                        </div>

                        </p>
<div class="images_footer">

                        <div class="row  align-items-center ">
                            <div class="col-3">
                                <img src="{{ asset($user->first_image) }}" alt="Image Not Found" class="mb-2" width="100%">

                            </div>
                            <div class="col-6">
                                <label for="exampleInputUsername1" class="form-label">1st Image</label>
                                <input type="file" name="first_image" class="form-control w-100"
                                    id="exampleInputUsername1" aria-describedby="UsernameHelp">
                            </div>
                        </div>


                        <div class="row  align-items-center ">
                            <div class="col-3">
                                <img src="{{ asset($user->second_image) }}" class="mb-2" alt="Image Not Found" width="100%">

                            </div>
                            <div class="col-6">

                                <label for="exampleInputUsername1" class="form-label">2nd Image</label>
                                <input type="file" name="second_image" class="form-control" id="exampleInputUsername1"
                                    aria-describedby="UsernameHelp">
                            </div>
                        </div>


                        <div class="row  align-items-center ">
                            <div class="col-3">
                                <img src="{{ asset($user->third_image) }}" class="mb-2" alt="Image Not Found" width="100%">

                            </div>
                            <div class="col-6">
                                <label for="exampleInputUsername1" class="form-label">3rd Image</label>
                                <input type="file" name="third_image" class="form-control" id="exampleInputUsername1"
                                    aria-describedby="UsernameHelp">
                            </div>
                        </div>



                        <div class="row  align-items-center ">
                            <div class="col-3">
                                <img src="{{ asset($user->four_image) }}" class="mb-2" alt="Image Not Found" width="100%">

                            </div>
                            <div class="col-6">
                                <label for="exampleInputUsername1" class="form-label">4th Image</label>
                                <input type="file" name="four_image" class="form-control" id="exampleInputUsername1"
                                    aria-describedby="UsernameHelp">
                            </div>
                        </div>


                        <div class="row  align-items-center ">
                            <div class="col-3">
                                <img src="{{ asset($user->five_image) }}" alt="Image Not Found" width="100%">

                            </div>
                            <div class="col-6">
                                <label for="exampleInputUsername1" class="form-label">5th Image</label>
                                <input type="file" name="five_image" class="form-control" id="exampleInputUsername1"
                                    aria-describedby="UsernameHelp">
                            </div>
                        </div>


                    </div>
                    </div>

                    <div class="col-5">
                        <label class="text-center fw-bold w-100" for="Background-pic">Background Image</label>
                        <div class="links rounded-pill  fw-bold text-center">

                            <input type="file" name="background_image" id="background-img">
                        </div>
                        <button type="button" class="links rounded-pill bg-light fw-bold">
                            Upload song, video, or social profile links here:</button>
                        <div class=" link-tags">
                            <ul>
                                <li>
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">1st Link</label>
                                        <input type="text" name="first_link" class="form-control"
                                            value="{{ $user->first_link }}" id="exampleInputUsername1"
                                            aria-describedby="UsernameHelp">
                                    </div>
                                </li>
                                <li>

                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">2nd Link</label>
                                        <input type="text" name="second_link" class="form-control"
                                            value="{{ $user->second_link }}" id="exampleInputUsername1"
                                            aria-describedby="UsernameHelp">
                                    </div>
                                </li>
                                <li>

                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">3rd Link</label>
                                        <input type="text" name="third_link" class="form-control"
                                            value="{{ $user->third_link }}" id="exampleInputUsername1"
                                            aria-describedby="UsernameHelp">
                                    </div>
                                </li>
                                <li>

                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">4th Link</label>
                                        <input type="text" name="fourth_link" class="form-control"
                                            id="exampleInputUsername1" value="{{ $user->fourth_link }}"
                                            aria-describedby="UsernameHelp">
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-5 ps-4">
                            <div class="d-flex justify-content-arround align-items-center">
                                <div class="radios">
                                    <h5>Select profile privacy</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="privacy"
                                            id="exampleRadios1" value="public"
                                            {{ $user->privacy == 'public' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Public
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="privacy"
                                            id="exampleRadios2" value="private"
                                            {{ $user->privacy == 'private' ? 'checked' : '' }}>
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
                    </div>
                </div>


            </div>
            <div class="text-center pb-5"> <button type="submit" class="links rounded-pill bg-info fw-bold">
                    Click here for Update </button>
            </div>
            </form>
            </div>

        </section>
    </main>
@endsection

@section('scripts')
    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        })
    </script>
@endsection
