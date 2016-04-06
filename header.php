<!DOCTYPE html>
<?php 
//$path = "http://127.0.0.1/pj2100-15-gruppe-22/";
$path = "http://home.nith.no/~marcle15/"
?>
<div id="header">
    <img src=<?php echo $path;?>images/CK32.jpg alt="" id="bg">
    <div id="headerTools">
        <span title="Hold Ctrl-tasten nede (Cmd-tasten på Mac). Trykk på + for å forstørre eller - for å forminske."/>
        |<span id="smaller">A </span>
        <span id="bigger">A</span></span>|
        <a href="http://www.westerdals.no">
            <span id="westerdals">Tilbake til Westerdals >></span>
        </a>
    </div>
    <a href=<?php echo $path;?>index.php>
        <div id="headLogo"><img src=<?php echo $path;?>images/Westervalg_stor_logo.png height="150px"></div>
        </a>
    <div class="buttons">
        | <a href=<?php echo $path;?>utvalg.php><div class="indexBtn utvalg" id="utvalgBtn">Utvalg</div></a>
        | <a href=<?php echo $path;?>foreslatte_utvalg.php><div class="indexBtn forUtvalg" id="fUtvalgBtn">Foreslåtte utvalg</div></a>
        | <a href=<?php echo $path;?>faq.php><div class="indexBtn home" id="faqBtn">FAQ</div></a>
        |
    </div>
</div>