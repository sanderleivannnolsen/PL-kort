<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles/login.css" rel="stylesheet">
</head>
<body>
    <div class="container" id="main">
        <div class="sign-up">
            <form method="post" action="register.php">
                <h1>Opprett bruker</h1>
                <input type="text" name="username" placeholder="Brukernavn" required="">
                <input type="password" name="password" placeholder="Passord" required="" minlength="8" maxlength="20">
                <button type="submit" name="signUp">Opprett</button>
            </form>
        </div>

        <div class="sign-in">
            <form method="post" action="register.php">
                <h1>Logg inn</h1>
                <input type="text" name="username" placeholder="Brukernavn" required="">
                <input type="password" name="password" placeholder="Passord" required="">
                <a href="#">Har du glemt passordet?</a>
                <button type="submit" name="signIn">Logg inn</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Velkommen tilbake</h1>
                    <p>Opprett en bruker ved å lage et brukernavn og et passord</p>
                    <button id="signIn">Logg inn</button>
                </div>
                <div class="overlay-right">
                    <h1>Velkommen</h1>
                    <p>Skriv inn passord og brukernavn til venstre for å logge inn</p>
                    <button id="signUp">Opprett bruker</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click', () => {
            main.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            main.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>
