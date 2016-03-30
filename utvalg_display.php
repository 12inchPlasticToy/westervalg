<?php
    
include "db_connect.php";
// mysqli connection in db_connect saved in $link variable
echo "<h2>UTVALG_DISPLAY INCLUDED</h2>";

$categories = array_values($_GET);

/* 
"quotify" every member of the array returned by $_GET
to fit in the SQL query
*/
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