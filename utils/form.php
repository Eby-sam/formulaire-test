<?php
require __DIR__ . "/../partials/header.php";
?>
    <div>
        <h1>Formulaire</h1>
    </div>
    <div id="font">
        <div id="formulaire">
            <form action="/utils/verif.php" method="post">
                <label for="user">Nom</label>
                <input type="text" name="user" id="user" minlength="3" maxlength="25">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" min="18" max="90">
                <label for="mail">Mail</label>
                <input type="email" name="email" id="mail" minlength="10" maxlength="30">
                <label for="pass">password</label>
                <input type="password" name="password" minlength="6" maxlength="25" id="pass">
                <label for="password-repeat">password repeat</label>
                <input type="password" id="password-repeat" name="password-repeat">
                <input type="submit" value="envoi" name="submit" id="id-submit">
            </form>
        </div>
    </div>


<?php
require __DIR__ . "/../partials/footer.php";
?>
