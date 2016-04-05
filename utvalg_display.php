<?php
    
include "db_connect.php";
// mysqli connection in db_connect saved in $link variable


/*
 check if any category is selected; by default, every utvalg
 should show
 */

//echo var_dump(count($_GET));
if(empty($_GET)){
	$categories = $themes;
}
else{
    switch($_GET['show']){
        case 'Vis valgte':
            if(count($_GET)>1){
                $categories = array_values($_GET);                        
            } 
            else{
                die("<h3>Ingen kategorier valgt</h3>");
            }
            break;
        case 'Vis alle':
            $categories = $themes;        
            break;
    }
}


/* 
"quotify" every member of the array returned by $_GET
to fit in the SQL query
*/

$categories = "'".implode("', '", $categories)."'";

$sql= 
    "SELECT Navn, Beskrivelse, Tags FROM utvalg
    WHERE ID IN ( 
        SELECT id_utvalg FROM utvalg_kategori AS u_k 
        JOIN kategori AS k ON u_k.id_kategori = k.ID 
        WHERE kategori IN (".$categories.")
        )";

$stmt = $link->prepare(htmlspecialchars($sql));
if($stmt === false){
    echo '<br><br><span style="color:red">';
    die('<br><br><span style="color:red">
    Query parameter error.<br>
    Please check the URL or use the category buttons.</span>');
}
$stmt->execute();

$stmt->bind_result($navn, $beskrivelse, $tags);


/*
Function that creates the display for "visitkort"
*/
function visitkort($name, $desc, $cat){
    echo '<div class="visitkort">
            <div class="utvalgLogo">
                <img src=logos/default.png alt="default logo">

            </div>
            <p>'.$name.'</p>
                    <hr>
                <p>'.$desc.'</p>
                <p>'.$cat.'</p>
                    
                </div>';
}

while($stmt->fetch()){
    visitkort($navn, $beskrivelse, $tags);
}

$stmt->close();

$link->close();
?>