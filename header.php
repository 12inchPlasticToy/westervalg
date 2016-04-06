<!DOCTYPE html>
<?php 
/*
Dynamically assigns absolute filepaths to the correct
URL
*/
$host = $_SERVER['HTTP_HOST'];
switch($host){
    case '127.0.0.1':
        define("PATH", "http://127.0.0.1/pj2100-15-gruppe-22/");
        break;
    case 'home.nith.no':
        define("PATH", "http://home.nith.no/~marcle15/");
        break;   
}
       
?>
<div id="header">
    <img src=<?php echo PATH;?>images/CK32.jpg alt="header background" id="bg">
    <div id="headerTools">
        <a href="http://www.westerdals.no">
            <span id="westerdals"><< Tilbake til Westerdals </span>
        </a>
        <span title="Hold Ctrl-tasten nede (Cmd-tasten på Mac). Trykk på + for å forstørre eller - for å forminske."/>
        |<span id="smaller">A </span>
        <span id="bigger">A</span></span>|
    </div>
    <a href=<?php echo PATH;?>index.php>
        <div id="headLogo"><img src=<?php echo PATH;?>images/Westervalg_stor_logo.png alt="homepage logo" height="150px"></div>
        </a>
    <div class="buttons">
   <!-- | <a href=<?php echo PATH;?>index.php><div class="indexBtn hjem" id="hjemBtn">Hjem</div></a> -->
        | <a href=<?php echo PATH;?>utvalg.php><div class="indexBtn utvalg" id="utvalgBtn">Utvalg</div></a>
        | <a href=<?php echo PATH;?>foreslatte_utvalg.php><div class="indexBtn forUtvalg" id="fUtvalgBtn">Idéer til utvalg</div></a>
        | <a href=<?php echo PATH;?>faq.php><div class="indexBtn faq" id="faqBtn">FAQ</div></a>
        |
    </div>
</div>