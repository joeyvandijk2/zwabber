<?php
include_once("../classes/database.php");
$db = new db();
if(empty($_GET["id"])){
    header("Location: ../ ");
}
if($_GET["delete"] == "bedrijf"){
    $db->delete("bedrijf","bedrijfId = ".$_GET["id"]);
    $db->delete("kamer","bedrijfId = ".$_GET["id"]);
}
if($_GET["delete"] == "kamer"){
    $db->delete("kamer","kamerId = ".$_GET["id"]);
    $db->delete("object","kamerId = ".$_GET["id"]);

}
if($_GET["delete"] == "object"){
    $db->delete("object","objectId = ".$_GET["id"]);
}
else{
    header("Location: ../ ");
}
?>