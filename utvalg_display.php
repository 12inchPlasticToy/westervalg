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
    "SELECT Navn FROM utvalg
    WHERE ID IN ( 
        SELECT id_utvalg FROM utvalg_kategori AS u_k 
        JOIN kategori AS k ON u_k.id_kategori = k.ID 
        WHERE kategori IN (".$categories.")
        )";

$stmt = $link->prepare(htmlspecialchars($sql));

if($stmt === false){
    die('<br><br><span style="color:red">
    Query parameter error.<br>
    Please check the URL or use the category buttons.</span>');
}

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

/*
Display the result as a simple table for prototype version
*/
    echo "<table border=\"2\"><tr><th>UTVALG</th></tr>";
    
    while($row = $result->fetch_array(MYSQLI_NUM)){
        echo "<tr><td>".$row[0]."</td></tr>";
    }
    
    echo "</table>";    
}
else {
    echo '<br><br>';
    echo 'Ingen utvalg tilhører kategorien '.$categories.' for øyeblikket';
}

$stmt->close();

$link->close();
?>