<?php
include_once("../classes/database.php");
$db = new db();
if(empty($_GET["id"])){
    header("Location: ../ ");
}
if($_GET["update"] == "bedrijf"){
    $db->update("bedrijf","bedrijfNaam='".$_GET['bedrijfnaam']."', bedrijfPlaats='".$_GET['bedrijfplaats']."', bedrijfTelefoon='". $_GET["bedrijftelefoon"]."'","bedrijfId = ".$_GET["id"]);
}
if($_GET["update"] == "kamer"){
    $db->update("kamer","kamerNaam='".$_GET['kamernaam']."', Schoonmaaktijd='".$_GET['schoonmaaktijd']."'', kamerminpunten='".$_GET['kamerminpunten']."', 	kamerPrioriteit='". $_GET["kamerprioriteit"]."'","kamerId = ".$_GET["id"]);

}
if($_GET["update"] == "object"){
    $db->update("object","objectNaam='".$_GET['objectnaam']."', objectPunten=".$_GET['objectpunten'].", objectAantal=". $_GET["objectaantal"]."","objectId = ".$_GET["id"]);

}
    header("Location: ../ ");

?>