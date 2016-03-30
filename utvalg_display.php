<?php
    
include "db_connect.php";
// mysqli connection in db_connect saved in $link variable

// Big fat message just to check whether 'include' in utvalg.php works only
// when one or more categories are selected
echo "<h2><span style=\"color:red\">UTVALG_DISPLAY.PHP INCLUDED <<-- this should not show if no boxes are checked</span></h2>";


/* 
"quotify" every member of the array returned by $_GET
to fit in the SQL query
*/
$categories = array_values($_GET);
$categories = "'".implode("', '", $categories)."'";

$sql= 
    "SELECT Navn FROM utvalg
    WHERE ID IN ( 
        SELECT id_utvalg FROM utvalg_kategori AS u_k 
        JOIN kategori AS k ON u_k.id_kategori = k.ID 
        WHERE kategori IN (".$categories.")
        )";

$stmt = $link->prepare($sql);
$stmt->execute();

$stmt->bind_result($utvalg);

/*
Display the result as a simple table for prototype version
*/
echo "<table border=\"2\"><tr><th>UTVALG</th></tr>";
while($stmt->fetch()){
    echo "<tr><td>".$utvalg."</td></tr>";
}
echo "</table>";

$stmt->close();

$link->close();
?>