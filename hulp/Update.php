<?php
include_once("../classes/database.php");
$db = new db();
if(empty($_GET["id"])){
    header("Location: ../ ");
}
if($_GET["update"] == "bedrijf"){
    $db->update("bedrijf","bedrijfNaam='".$_GET['bedrijfnaam']."', bedrijfPlaats='".$_GET['bedrijfplaats']."', bedrijfTelefoon='". $_GET["bedrijftelefoon"]."'","bedrijfId = ".$_GET["id"]);
    header("Location: ../ ");
}
if($_GET["update"] == "kamer"){
<<<<<<< HEAD
    $db->update("kamer","kamerNaam='".$_GET['kamernaam']."', Schoonmaaktijd='".$_GET['schoonmaaktijd']."'', kamerminpunten='".$_GET['kamerminpunten']."', 	kamerPrioriteit='". $_GET["kamerprioriteit"]."'","kamerId = ".$_GET["id"]);

=======
    $db->update("kamer","kamerNaam='".$_GET['kamernaam']."', kamerminpunten='".$_GET['kamerminpunten']."', 	kamerPrioriteit='". $_GET["kamerprioriteit"]."'","kamerId = ".$_GET["id"]);
    header("Location: ../ ");
>>>>>>> origin/master
}
if($_GET["update"] == "object"){
    $db->update("object","objectNaam='".$_GET['objectnaam']."', objectPunten=".$_GET['objectpunten'].", objectAantal=". $_GET["objectaantal"]."","objectId = ".$_GET["id"]);
    header("Location: ../ ");
}
if($_GET["update"] == "werkdag"){
    $db->update("werkdagen","werknemerId='".$_GET['werknemerid']."', werkTitle='".$_GET['tijd']."', werkdag='". $_GET["dag"]."'","werkdagId= ".$_GET["id"]);
    header("Location: ../werknemer.php ");
}


?>