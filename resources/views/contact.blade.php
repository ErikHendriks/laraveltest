@extends('dashboard')

@section('title', 'Contact')


@section('content')

    <div class="container">
        <form action="">
        <div class="input-wrapper">
            <label for="profielnaam" >Uw profielnaam</label>
            <input type="text" id="profielnaam" name="" placeholder="Profielnaam" required>
        </div>

        <div class="input-wrapper" data-error="Geen geldig e-mailadres">
            <label for="profielnaam" >E-mailadres</label>
            <input type="email" id="email" name="" placeholder="voorbeeld@email.com" required>
        </div>

        <div class="input-wrapper">
            <label for="wachtwoord" >Wachtwoord</label>
            <div class="pw-wrapper">
                <input type="password" id="wachtwoord" name="" placeholder="Geef wachtwoord in" required >
                <img src="img/eye-o.svg" id="eye" title="toon paswoord" onClick="togglePW()">
            </div>
        </div>


        <div class="login-details-wrapper">
            <div class="logged-state-wrapper">
                <input class="checkbox" type="checkbox" id="save-login">
                <label for="save-login">Ingelogd blijven</label>
            </div>

            <a href="#">Wachtwoord vergeten?</a>
        </div>

        <button type="submit" class="form-submit-btn">Inloggen</button>


    </form>
    </div>

@endsection
