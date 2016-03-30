<?php
    
include "db_connect.php";
// mysqli connection in db_connect saved in $link variable
echo "<h2>UTVALG_DISPLAY INCLUDED</h2>";

$categories = array_values($_GET);

// "quotify" every member of the array returned by $_GET
// for the SQL query
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


while($stmt->fetch()){
    echo "Result: ".$utvalg." <br>";
}

$stmt->close();

$link->close();
?>