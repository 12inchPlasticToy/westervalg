<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Westervalg</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div id="header">
            <br>
            <div id="headLogo"><br><br><br>LOGO</div>
            <br><br>
            <div class="buttons">
                <a href="?content=start"><div id="startBtn" class="indexBtn home">Start</div></a>
                <a href="?content=utvalg"><div id="utvalgBtn" class="indexBtn utvalg">Utvalg</div></a>
                <a href="?content=about"><div id="aboutBtn" class="indexBtn about">About</div></a>
            </div>
            
            <hr>
            <div id="content">
                <?php
                
                $content = isset($_GET['content']) ? $_GET['content'] : 'start';
                $page = $content.'.php';
                include $page;
                ?>
            </div>
        </div>
    </body>
</html>