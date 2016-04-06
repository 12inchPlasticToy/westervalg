<?php
    
// mysqli connection in db_connect saved in $link variable
include "db_connect.php";


/*
Quick function to print error messages properly
*/
function wrongURL($message){
    echo "<h3>$message</h3>";
                echo "</div></div>";
                include "footer.php";
                die();
}

/*
 check if any category is selected; by default, every utvalg
 should show
 */

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
                wrongURL("Ingen kategorier valgt");
            }
            break;
        case 'Vis alle':
            $categories = $themes;        
            break;
        default:
            wrongURL("Denne siden eksisterer ikke");
    }
}



/* 
"quotify" every member of the array returned by $_GET
to fit in the SQL query
*/

$categories = "'".implode("', '", $categories)."'";

$sql= 
    "SELECT Navn, Beskrivelse, Tags, idnavn FROM utvalg
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

$stmt->bind_result($navn, $beskrivelse, $tags, $idnavn);

/*
Return the URL for the given utvalg info page.
If no page has been created for this utvalg, return the URL to a
page sending back to the utvalg search page.
*/
function getPageURL($pageNameToMatch){
    $pageURL = "utvalg/".$pageNameToMatch.".php";
    return (file_exists($pageURL)) ? $pageURL : "utvalg/default.php";
}


/*
Creates the layout for "visitkort" and populates it with 
the corresponding variables
*/
function visitkort($name, $desc, $cat, $idName){
    $id = ($idName !== null)? $idName : "default";
    $pageURL = getPageURL($id);    
    $logoURL = "logos/logo_".$id.".png";
    $logoAltText = $name." logo";
    if(!file_exists($logoURL)){
        $logoURL = "logos/logo_default.png";
        $logoAltText = "default logo";
    }
    echo '
    <a href="'.$pageURL.'">
        <div class="visitkort">
            <div class="utvalgLogo">
                <img src="'.$logoURL.'" alt="'.$logoAltText.'">
            </div>
            <p class="name">'.$name.'</p>
            <hr>
            <p>'.$desc.'</p>
            <div class="tags">
                <p>Kategorier: '.$cat.'</p>
            </div>
        </div>
    </a>
    ';
}

while($stmt->fetch()){
    visitkort($navn, $beskrivelse, $tags, $idnavn);
}

$stmt->close();

$link->close();
?>