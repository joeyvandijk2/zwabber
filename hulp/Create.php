<?php
include_once("../classes/database.php");
$db = new db();
if(empty($_GET["id"])){
    header("Location: ../ ");
}
if($_GET["create"] == "bedrijf"){
        $db->create("bedrijf","bedrijfNaam, bedrijfPlaats, bedrijfTelefoon","'".$_GET['bedrijfnaam']."','".$_GET['bedrijfplaats']."','". $_GET["bedrijftelefoon"]."'");
    header("Location: ../ ");
}
if($_GET["create"] == "kamer"){
    $db->create("kamer","bedrijfId, kamerNaam, Schoonmaaktijd, kamerminpunten, kamerPrioriteit, werknemerId","'".$_GET['bedrijfid']."','".$_GET['kamernaam']."','".$_GET['schoonmaaktijd']."','". $_GET["kamerminpunten"]."','". $_GET["kamerprioriteit"]."','". $_GET["werknemerid"]."'");
    header("Location: ../index.php?table=kamer&bedrijfid=".$_GET['bedrijfid']);
}
if($_GET["create"] == "object"){
    $db->create("object","kamerId, objectNaam, objectPunten, objectAantal","'".$_GET['kamerid']."','".$_GET['objectnaam']."','". $_GET["objectpunten"]."','". $_GET["objectaantal"]."'");
    header("Location: ../index.php?table=object&kamerid=".$_GET['kamerid']);

}


?>