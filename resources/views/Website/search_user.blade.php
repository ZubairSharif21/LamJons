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
    label{
        font-weight: bolder
    }
</style>
@endsection
@section('content')
<main>
	<section id="main-pages">
		<div class="container">
          <div class="col-lg-6 col-md-12 col-sm-12 mx-auto">
            <h2 class="text-center"> Looking for someone specific?</h2>
<form action="{{ route('user_search') }}" method="post">
    @csrf
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="input-field-main">
                        <label>Username*</label>
                        <input type="text" name="username" value="{{ old('username') }}">
                    </div>
                </div>
<h5 class="text-center my-4">Want to browse members focussing on a specific area?</h5>

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






