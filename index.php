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
        <?php 
            echo Content::render("container");
        ?>
        <?php 
            echo Content::render("tracker", false);
        ?>
    </body>
</html>
