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
if($_GET["create"] == "werkdag"){
    $db->create("werkdagen","werknemerId, werkTitle, werkdag","'".$_GET['werknemerid']."','".$_GET['tijd']."','". $_GET["dag"]."'");
    header("Location: ../werknemer.php");

}
if($_GET["create"] == "account"){
    $db->create("werknemer","werknemerGebruikersnaam, werknemerWachtwoord, werknemerNaam, werknemerPlaats, werknemerEmail, werknemerTelefoon, werknemerGeslacht, Rechten"
        ,"'".$_GET['genaam']."','".$_GET['geww']."','". $_GET["naam"]."','".$_GET['plaats']."','".$_GET['email']."','".$_GET['tele']."','".$_GET['slacht']."','".$_GET['recht']."'");
    header("Location: ../");

}


?>