<?php
    
include "db_connect.php";
// mysqli connection in db_connect saved in $link variable


/*
 check if any category is selected; by default, every utvalg
 should show
 */
if(empty($_GET)){
	$categories = $themes;
}else{
	$categories = array_values($_GET);
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


/*
Display the result as a simple table for prototype version

echo "<table border=\"2\"><tr><th>UTVALG</th></tr>";
while($stmt->fetch()){
    echo "<tr><td>".$utvalg."</td></tr>";
echo "</table>";
}
*/
while($stmt->fetch()){
    visitkort($navn, $beskrivelse, $tags);
}

$stmt->close();

$link->close();
?>