<!DOCTYPE html>
<html>
    <head>
        <title>Utvalg</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body class="utvalg">
        <?php include "header.php"; ?>
        <br>
        <div class="utvalgButtons">
            <a href=#><div id="findBtn" class="utvalgMenu finn">Finn utvalg</div></a>
            <a href=#><div id="newBtn" class="utvalgMenu startNew">Hvordan starte nytt utvalg?</div></a>
        </div>
        
        <!-- category selector START-->
        
        <h2>Velg en kategori</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        
            <?php
            /**
            This is just for testing, should be refactored
            **/
            $themes = array('Baren',
                            'Bowling',
                            'Brett- og kortspill',
                            'Bøker',
                            'Fester',
                            'Film',
                            'For ansatte',
                            'For studenter',
                            'Gaming',
                            'Gründervirksomhet',
                            'IT',
                            'Kunst', 
                            'Musikk', 
                            'Utflukter',
                            'Utvikling');
            
            foreach($themes as $category){
                
                echo "<input type=\"checkbox\" name=\"$category\" value=\"$category\">$category";
            }
            ?>
            <br>
            <input type="submit" value="Søk">
            <input type="reset" value="Reset">
        </form>
        
        <!-- category selector END-->
        
        <!-- display the results according to checked buttons -->
        <?php include "utvalg_display.php";?>
        
        <br>
        <br>
        <br>
        HELLO WORLD
        <img width="70%" src="images/student.jpg">
    </body>
</html>