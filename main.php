<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CodeTrek</title>
        <link rel="stylesheet" href="/css/index.css" />
        <script src="/js/jquery-1.8.3.js"></script>
        <script src="/js/jquery-ui.js"></script>
        <script src="/js/jquery.cookie.js"></script>
        <script src="/js/main.js"></script>
    </head>
    <body>
        <center>
            <div class="banner">
                Code Trek<br>
                <div class="banner-footer">
                    Boldly code , what no man has coded before ......
                </div>
            </div>
            <div class="tease-box">
                <div class="welcome-message">
                    <br>
                    <br>
                    Drag Up To Drop The Curtain
                </div>
            </div>
        </center>
        <?php echo file_get_contents(__DIR__ . "/parts/tracker.content"); ?>
    </body>
</html>
