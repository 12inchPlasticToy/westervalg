<!DOCTYPE html>
<html lang=”nb”>
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
            <h2>Velg kategorier og trykk på "Vis valgte"</h2>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                <?php
                /**
                Hardcoded copy of all categories from database table "kategori".
                If more database queries are allowed, could be populated dynamically.
                **/
                $i = 1;
                $themes = array('Baren',
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
                                'Improvisasjon',
                                'Poesi',
                                'Sport',
                                'Teater');
                
                foreach($themes as $category){

                    echo '<div class="categoryBtn"><input type="checkbox" name="cat_'.$i.'" value="'.$category.'" id="'.$i.'" ><label for="'.$i.'">'.$category.'</label></div>';
                    $i++;
                }
                ?>
                <br>
                <br>
                <input type="submit" name="show" value="Vis valgte">
                <input type="submit" name="show" value="Vis alle">
                <input type="reset" value="Fjern valg">
            </form>
            <!-- category selector END-->
            
            <p>Klikk på et utvalg for å få mer informasjon.</p>
            
            <!-- Utvalg display START -->
            <br>
            <div class="visitkortWrapper">                
                <?php include "utvalg_display.php";?>
            </div>
            <!-- Utvalg display END -->
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>