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
	<section id="main-pages">
		<div class="container">
          <div class="col-lg-6 col-md-12 col-sm-12 mx-auto">
            <h2> What posts do you want to see?</h2>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form action="{{ route('browse_posts') }}" method="GET">
                    <div class="col-md-12">
                        <div class="align-skill-level d-flex align-items-center">
                            <div class="title-skill-level">
                                <h4>Category :</h4>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="looking" value="looking_for"
                                            {{ old('category') == 'looking' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="looking">
                                            Looking For
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="available" name="category" id="available"
                                            {{ old('category') == 'available' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="available">
                                            Available
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="hired" name="category" id="hired"
                                            {{ old('category') == 'hired' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="hired">
                                            Hired Guns
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <a href="skill-level" class="text-dark ms-5">What do these Categories mean?</a>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="col-md-12">
                        <div class="align-skill-level d-flex align-items-center">
                            <div class="title-skill-level">
                                <h4>Skill Level:</h4>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="skills" id="ready" value="ready"
                                            {{ old('skills') == 'ready' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="ready">
                                            Radio Ready
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="collaborator" name="skills" id="collaborator"
                                            {{ old('skills') == 'collaborator' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="collaborator">
                                            Collaborator
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="newbie" name="skills" id="newbie"
                                            {{ old('skills') == 'newbie' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="newbie">
                                            Newbie
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <a href="skill-level" class="text-dark ms-5">What do these Skill Levels mean?</a>

                </div>

            </div>
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="input-field-main">
                        <label>Username*</label>
                        <input type="text" name="username" value="{{ old('username') }}">
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <div class="category-select input-field-main">
                                <label>Musical Genre:</label>
                                <select name="musical_genre">
                                    <option selected disabled>none</option>
                                    <option value="rock" {{ old('musical_genre') == 'rock' ? 'selected' : '' }}>Rock</option>
                                    <option value="pop" {{ old('musical_genre') == 'pop' ? 'selected' : '' }}>Pop</option>
                                    <option value="hip hop" {{ old('musical_genre') == 'hip hop' ? 'selected' : '' }}>Hip-Hop</option>
                                    <option value="rap" {{ old('musical_genre') == 'rap' ? 'selected' : '' }}>Rap</option>
                                    <option value="r&b" {{ old('musical_genre') == 'r&b' ? 'selected' : '' }}>R&B</option>
                                    <option value="blues" {{ old('musical_genre') == 'blues' ? 'selected' : '' }}>Blues</option>
                                    <option value="country" {{ old('musical_genre') == 'country' ? 'selected' : '' }}>Country</option>
                                    <option value="latin" {{ old('musical_genre') == 'latin' ? 'selected' : '' }}>Latin</option>
                                    <option value="electronic" {{ old('musical_genre') == 'electronic' ? 'selected' : '' }}>Electronic</option>
                                    <option value="jazz" {{ old('musical_genre') == 'jazz' ? 'selected' : '' }}>Jazz</option>
                                    <option value="classical" {{ old('musical_genre') == 'classical' ? 'selected' : '' }}>Classical</option>
                                    <option value="other" {{ old('musical_genre') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                                                                    </div>
                        </div>
                        <div class="col-md-4">
                            <div class="category-select input-field-main">
                                <label>Instrument:</label>
                                <select name="instrument">
                                    <option selected disabled>none</option>

                                    <option value="Vocals" {{ old('instrument') == 'Vocals' ? 'selected' : '' }}>Vocals</option>
                                    <option value="Backling Vocals" {{ old('instrument') == 'Backling Vocals' ? 'selected' : '' }}>Backing Vocals</option>
                                    <option value="Lead Guitar" {{ old('instrument') == 'Lead Guitar' ? 'selected' : '' }}>Lead Guitar</option>
                                    <option value="Rhythm Guitar" {{ old('instrument') == 'Rhythm Guitar' ? 'selected' : '' }}>Rhythm Guitar</option>
                                    <option value="Bass" {{ old('instrument') == 'Bass' ? 'selected' : '' }}>Bass</option>
                                    <option value="Keyboards" {{ old('instrument') == 'Keyboards' ? 'selected' : '' }}>Keyboards</option>
                                    <option value="Drums" {{ old('instrument') == 'Drums' ? 'selected' : '' }}>Drums</option>
                                    <option value="Percussion" {{ old('instrument') == 'Percussion' ? 'selected' : '' }}>Percussion</option>
                                    <option value="Brass" {{ old('instrument') == 'Brass' ? 'selected' : '' }}>Brass</option>
                                    <option value="Strings" {{ old('instrument') == 'Strings' ? 'selected' : '' }}>Strings</option>
                                    <option value="Woodwinds" {{ old('instrument') == 'Woodwinds' ? 'selected' : '' }}>Woodwinds</option>
                                    <option value="Other" {{ old('instrument') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="category-select input-field-main">
                                <label>Other Services:</label>
                                <select name="other_services">
                                    <option selected disabled>none</option>

                                    <option value="Songwriting" {{ old('other_services') == 'Songwriting' ? 'selected' : '' }}>Songwriting</option>
                                    <option value="Mixing/Mastering" {{ old('other_services') == 'Mixing/Mastering' ? 'selected' : '' }}>Mixing/Mastering</option>
                                    <option value="Promoting" {{ old('other_services') == 'Promoting' ? 'selected' : '' }}>Promoting</option>
                                    <option value="Videography" {{ old('other_services') == 'Videography' ? 'selected' : '' }}>Videography</option>
                                    <option value="Photography" {{ old('other_services') == 'Photography' ? 'selected' : '' }}>Photography</option>
                                    <option value="Editing" {{ old('other_services') == 'Editing' ? 'selected' : '' }}>Editing</option>
                                    <option value="Other" {{ old('other_services') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <p class="text-center mt-5">You can select multiple drop-down categories by <br>

                clicking while pressing the Option Key.</p>
                <div class="submit-btn big-button">
                    <div class="main-button">
                        <button type="submit" class="custom-btn">Search</button>
                        <div class="bg-button">
                        </div>
                        <div class="bg-button2">
                        </div>
                    </div>
                </div>
          </div>
        </form>
        </div>
	</section>
</main>

@endsection






