<?php 

require_once("config/constants.php");
include('header.php'); 


?>

<body>
    <?php include('nav.php'); ?>

    <div class="uk-container">

        <main class="uk-padding">

            <form action="./process/band/update.php" method="get">
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Nombre de la banda" name="name">
                </div>
                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="5" placeholder="Biografía de la banda" name="bio"></textarea>
                </div>
                <input type="hidden" value=<?php echo"\"".$_GET["name"]."\"";?> name="oldName">
                <button type="submit" class="uk-button uk-button-primary">Modify Band</button>
            </form>
        </main>
    </div>
</body>