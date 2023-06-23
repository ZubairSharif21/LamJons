{{-- @extends('layouts.app') --}}

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>

@include('web_layout.header')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

</head>
{{-- @section('content') --}}
@if (session('success'))
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        icon: 'success',
        title: '{{ session('success') }}'
    });
</script>
@endif
@if ($errors->any())
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    Toast.fire({
        icon: 'error',
        title: '{{ $errors->first() }}'
    });
</script>
@endif








<div class="container  ">
    <div class="row justify-content-center align-items-center" style="height: 700px">
        <div class="col-lg-10 ">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="text-center">Update Post Details</h3>
                </div>
                <div class="card-body">
                    <form action="update_post/{{ $post->id }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field-main">
                                    <label>First Name*</label>
                                    <input type="text" name="first_name" value="{{ $post->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field-main">
                                    <label>Last Name*</label>
                                    <input type="text" name="last_name" value="{{ $post->last_name }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-field-main">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{ $post->email }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="category-select input-field-main">
                                            <label>Musical Genre:</label>
                                            <select name="musical_genre">
                                                <option selected disabled>Select Musical Genre</option>
                                                <option value="rock" {{ $post->musical_genre == 'rock' ? 'selected' : '' }}>Rock</option>
                                                <option value="pop" {{ $post->musical_genre == 'pop' ? 'selected' : '' }}>Pop</option>
                                                <option value="hip hop" {{ $post->musical_genre == 'hip hop' ? 'selected' : '' }}>Hip-Hop</option>
                                                <option value="rap" {{ $post->musical_genre == 'rap' ? 'selected' : '' }}>Rap</option>
                                                <option value="r&b" {{ $post->musical_genre == 'r&b' ? 'selected' : '' }}>R&B</option>
                                                <option value="blues" {{ $post->musical_genre == 'blues' ? 'selected' : '' }}>Blues</option>
                                                <option value="country" {{ $post->musical_genre == 'country' ? 'selected' : '' }}>Country</option>
                                                <option value="latin" {{ $post->musical_genre == 'latin' ? 'selected' : '' }}>Latin</option>
                                                <option value="electronic" {{ $post->musical_genre == 'electronic' ? 'selected' : '' }}>Electronic</option>
                                                <option value="jazz" {{ $post->musical_genre == 'jazz' ? 'selected' : '' }}>Jazz</option>
                                                <option value="classical" {{ $post->musical_genre == 'classical' ? 'selected' : '' }}>Classical</option>
                                                <option value="other" {{ $post->musical_genre == 'other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                                                                                </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="category-select input-field-main">
                                            <label>Instrument:</label>
                                            <select name="instrument">
                                                <option selected disabled>Select Instrument</option>

                                                <option value="Vocals" {{ $post->instrument == 'Vocals' ? 'selected' : '' }}>Vocals</option>
                                                <option value="Backling Vocals" {{ $post->instrument == 'Backling Vocals' ? 'selected' : '' }}>Backing Vocals</option>
                                                <option value="Lead Guitar" {{ $post->instrument == 'Lead Guitar' ? 'selected' : '' }}>Lead Guitar</option>
                                                <option value="Rhythm Guitar" {{ $post->instrument == 'Rhythm Guitar' ? 'selected' : '' }}>Rhythm Guitar</option>
                                                <option value="Bass" {{ $post->instrument == 'Bass' ? 'selected' : '' }}>Bass</option>
                                                <option value="Keyboards" {{ $post->instrument == 'Keyboards' ? 'selected' : '' }}>Keyboards</option>
                                                <option value="Drums" {{ $post->instrument == 'Drums' ? 'selected' : '' }}>Drums</option>
                                                <option value="Percussion" {{ $post->instrument == 'Percussion' ? 'selected' : '' }}>Percussion</option>
                                                <option value="Brass" {{ $post->instrument == 'Brass' ? 'selected' : '' }}>Brass</option>
                                                <option value="Strings" {{ $post->instrument == 'Strings' ? 'selected' : '' }}>Strings</option>
                                                <option value="Woodwinds" {{ $post->instrument == 'Woodwinds' ? 'selected' : '' }}>Woodwinds</option>
                                                <option value="Other" {{ $post->instrument == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="category-select input-field-main">
                                            <label>Other Services:</label>
                                            <select name="other_services">
                                                <option selected disabled>Select Other Services</option>

                                                <option value="Songwriting" {{ $post->other_services == 'Songwriting' ? 'selected' : '' }}>Songwriting</option>
                                                <option value="Mixing/Mastering" {{ $post->other_services == 'Mixing/Mastering' ? 'selected' : '' }}>Mixing/Mastering</option>
                                                <option value="Promoting" {{ $post->other_services == 'Promoting' ? 'selected' : '' }}>Promoting</option>
                                                <option value="Videography" {{ $post->other_services == 'Videography' ? 'selected' : '' }}>Videography</option>
                                                <option value="Photography" {{ $post->other_services == 'Photography' ? 'selected' : '' }}>Photography</option>
                                                <option value="Editing" {{ $post->other_services == 'Editing' ? 'selected' : '' }}>Editing</option>
                                                <option value="Other" {{ $post->other_services == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="align-skill-level">
                                    <div class="title-skill-level">
                                        <h4>Skill Level:</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="skills" id="ready" value="ready" {{ $post->skills == 'ready' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="ready">
                                                    Radio Ready
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="collaborator" name="skills" id="collaborator" {{ $post->skills == 'collaborator' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="collaborator">
                                                    Collaborator
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="newbie" name="skills" id="newbie" {{ $post->skills == 'newbie' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="newbie">
                                                    Newbie
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-field-main">
                                    <label>Message</label>
                                    <textarea style="height: 200px;" name="message"> {{ $post->message }}</textarea>
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
