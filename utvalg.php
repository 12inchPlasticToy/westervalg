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
        <!-- category selector START-->
        <div id="content">
            <h2>Velg en kategori</h2>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            
                <?php
                /**
                Hardcoded copy of all categories from database table "kategori".
                If more database queries are allowed, could be populated dynamically.
                **/
                $themes = array('Baren',
                                'Bowling',
                                'Brett- og kortspill',
                                'Fester',
                                'Film',
                                'For ansatte',
                                'For studenter',
                                'Gaming',
                                'Gründervirksomhet',
                                'IT',
                                'Kunst', 
                                'Musikk', 
                                'Friluftsliv',
                                'Utvikling',
                                'Improvisasjon',
                                'Poesi',
                                'Sport',
                                'Teater');
                
                foreach($themes as $category){
                    
                    echo "<input type=\"checkbox\" name=\"$category\" value=\"$category\" id=\"$category\"><label for=\"$category\">$category</label> &emsp; &emsp;";
                }
                ?>
                <br>
                <input type="submit" value="Søk">
                <input type="reset" value="Vis alle">
            </form>
            
            <!-- category selector END-->
            
            <!-- display the results according to checked buttons -->
            <?php include "utvalg_display.php";?>
        </div>
    </body>
</html>