<?php
$cookie = $_COOKIE["messedWith"];
if (is_null($cookie)) {
    header("Location: /main.php");
}
 ?>

<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CodeTrek</title>
        <link rel="stylesheet" href="/css/index.css" />
    </head>
    <body>
        <center>
            <div class="banner-footer">
            Welcome, I am not ready-ish yet.. Please just wait a little longer.
            <br>
            <br>
            LLAP
            </div>
        </center>
        <?php echo file_get_contents(__DIR__ . "/parts/tracker.content"); ?>
    </body>
</html>
