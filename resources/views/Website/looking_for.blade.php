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
							<div class="rockstar-img">
								<img src="./assets/img/rockstar.png" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="form-looking">
							<div class="title-looking">
								<h3>Looking For :</h3>
								<p>You're the one in charge. It's your idea, your project, your baby. But you need some finishing touches. Create an ad to recruit the talent that will make your project pop.</p>
							</div>
                            <form action="form_submission" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-field-main">
                                            <label>First Name*</label>
                                            <input type="text" name="first_name" value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field-main">
                                            <label>Last Name*</label>
                                            <input type="text" name="last_name" value="{{ old('last_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field-main">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="category-select input-field-main">
                                                    <label>Musical Genre:</label>
                                                    <select name="musical_genre">
                                                        <option selected disabled>Select Musical Genre</option>
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
                                                        <option selected disabled>Select Instrument</option>

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
                                                        <option selected disabled>Select Other Services</option>

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

                                    <div class="col-md-12">
                                        <div class="input-field-main">
                                            <label>Message</label>
                                            <textarea style="height: 200px;" name="message"> {{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn big-button">
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
				</div>
			</div>
		</div>
	</section>
</main>
@endsection






