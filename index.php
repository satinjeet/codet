<?php
$cookie = $_COOKIE["messedWith"];
if (is_null($cookie)) {
    header("Location: /main.php");
}

include_once __DIR__ . "/parts/Content.php";
?>

<!DOCTYPE html>
<html>
    <?php 
        echo Content::render("head");
    ?>
    <body class="page1">
        <?php 
            echo Content::render("menu");
        ?>
        <div id="container" class="container">
            <?php
                echo Content::render("home");
            ?>
        </div>
        <?php 
            echo Content::render("tracker", false);
        ?>
        <div id="lightbox">
            <img src="css/images/36.gif" />
        </div>
    </body>
</html>
