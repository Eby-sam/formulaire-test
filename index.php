<?php
    require_once __DIR__ ."/partials/header.php";
?>


    <div class="one">
        <a href="/utils/form.php">Formulaire</a>
    </div>

    <div class="one">
        <?php
            echo "I'm SamSam"
        ?>
    </div>

    <div class="one">
        <?php
        echo 'user : ' . $_POST["user"] . "<br>";
        echo 'mail : ' . $_POST["email"] . "<br>";
        echo 'age  : ' . $_POST["age"] . "<br>";
        echo '-----ACCEPTED-----';
        ?>
    </div>

    <div class="one">
        <?php
        echo "les card augmente de 25% les stats de bases"
        ?>
    </div>



<?php
    require_once __DIR__ ."/partials/footer.php";
?>
