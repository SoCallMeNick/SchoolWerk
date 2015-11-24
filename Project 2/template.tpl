<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 5</title>
</head>

<body>

<!-- START BLOCK : result -->
<h1>Contact Formulier - Resultaten</h1>
{name}
{surname}
{password}
{email}
{birthday}
{gender}
{message}
{news}
{terms}
<!-- END BLOCK : result -->

<!-- START BLOCK : form -->
<h1>Contact Formulier</h1>
<form action="./" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Uw Persoonlijke Gegevens</legend>
        <div class="formInnerDiv">
            <label for="firstname" class="formLabel">Uw voornaam:</label>
            <input name="name" class="formInput" id="firstname" type="text" value=""
                   placeholder="John"/>
        </div>
        <div class="formInnerDiv">
            <label for="surname" class="formLabel">Uw achternaam:</label>
            <input name="surname" class="formInput" id="surname" type="text" value=""
                   placeholder="Doe"/>
        </div>
        <div class="formInnerDiv">
            <label for="password" class="formLabel">Uw password:</label>
            <input name="password" class="formInput" id="password" type="password" value=""
                   placeholder="YourP4s5w0rD123"/>
        </div>

        <div class="formInnerDiv">
            <label for="email" class="formLabel">Uw E-Mail:</label>
            <input type="text" class="formInput" name="email" id="email"
                   placeholder="john.doe@live.nl"/>
        </div>
        <div class="formInnerDiv">
            <p>
                U bent een:
                <span class="gender">
                    <input type="radio" class="female" id="female" name="gender"
                           value="female"
                           checked/>
                    <label for="female" class="formlabel female">vrouw</label>
                </span>
                <span class="gender">
                    <input type="radio" id="male" name="gender" value="male"/>
                    <label for="male" class="formlabel male">man</label>
                </span>
            </p>
        </div>
        <div class="formInnerDiv">
            <label for="birthday" class="formlabel">Uw Geboorte Datum:</label>
            <input type="date" class="" id="birthday" name="birthday" value=""/>
        </div>
    </fieldset>
    <fieldset>
        <legend>Uw Vraag</legend>
        <div class="formInnerDiv">
            <label for="message" class="hidden">Stel hier uw vraag.</label>
            <textarea name="message" class="formInput" id="message" placeholder="Schrijf hier uw vraag."></textarea>
        </div>
    </fieldset>
    <fieldset>
        <legend>optioneel</legend>
        <div class="formInnerDiv">
            <div class="clearB">
                <input type="checkbox" id="news" name="news" checked/>
                <label for="news">Kruis dit blokje aan als U van ons nieuws wilt ontvangen
                    via de mail.</label>
            </div>
            <br/>

            <div class="clearB">
                <input type="checkbox" id="terms" name="terms"/>
                <label for="terms">je gaat akkoord met de <a href="./" target="_blank">servicevoorwaarden</a> en geeft
                    aan deze gelezen te hebben.</label>
            </div>
        </div>
    </fieldset>
    <input name="submit" class="button" type="submit" value="Verstuur Mail"/>
</form>
<!-- END BLOCK : form -->
</body>
</html>
