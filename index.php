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
            <div id="buttons">
                <a href="?content=1"><div id="startBtn" class="indexBtn home">Start</div></a>
                <a href="?content=2"><div id="utvalgBtn" class="indexBtn utvalg">Utvalg</div></a>
                <a href="?content=3"><div id="aboutBtn" class="indexBtn about">About</div></a>
            </div>
            
            <hr>
            
            <div id="content">
                <?php 
                switch($_GET['content']){
                case 1: include 'start.php'; break;
                case 2: include 'utvalg.php'; break;
                case 3: include 'about.php'; break;
                default: include 'start.php'; break;
                }
                ?>
            </div>
        </div>
    </body>
</html>