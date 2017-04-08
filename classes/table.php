<?php
class table
{
    private $table;
    private $db;
    public function __construct()
    {
        $this->db = new db();
    }
    public function bedrijfen()
    {

        $result = $this->db->conn->query($this->db->select("bedrijf"));
        $werknemers = $this->db->conn->query($this->db->select("werknemer"));
        $this->table = "<table class='table table-striped table-condeced'>";
        $this->table .= "<tr>";
        $this->table .= "<td> Bedrijf ID</td>";
        $this->table .= "<td> Bedrijf Naam</td>";
        $this->table .= "<td> Bedrijf Plaats</td>";
        $this->table .= "<td> Bedrijf Telefoon</td>";
        $this->table .= "<td> Opties</td>";
        $this->table .= "</tr>";
        while($bedrijf = $result->fetch_assoc()) {
             $this->table .= "<tr>";
             $this->table .= "<td>".$bedrijf["bedrijfId"]."</td>";
             $this->table .= "<td>".$bedrijf["bedrijfNaam"]."</td>";
             $this->table .= "<td>".$bedrijf["bedrijfPlaats"]."</td>";
             $this->table .= "<td>".$bedrijf["bedrijfTelefoon"]."</td>";
             $this->table .= "<td><a href='?table=kamer&bedrijfid=" . $bedrijf["bedrijfId"] . "'><span class='glyphicon glyphicon-arrow-right'></span> </a>";
            while($werknemer = $werknemers->fetch_assoc()) {
                if($_SESSION["wid"] == $werknemer["werknemerId"]){
                    if ($_SESSION["recht"] == 1) {
                        $this->table .= "<a><span class='glyphicon glyphicon-cog' data-toggle='modal' data-target='.upd" . $bedrijf["bedrijfId"] . "'></span></a><a><span class='glyphicon glyphicon-trash' data-toggle='modal' data-target='.del" . $bedrijf["bedrijfId"] . "'></span></a>";
                    }
                }
            }
             $this->table .=  "</td>";
             $this->table .= "</tr>";
        }
        $this->table .= "</table>";
        return $this->table;
    }
    public function kamers()
    {
        $result = $this->db->conn->query($this->db->select("kamer", "WHERE bedrijfId=".$_GET["bedrijfid"]));
        $this->table = "<table class='table table-striped table-condeced'>";
        $this->table .= "<tr>";
        $this->table .= "<td> Kamer ID</td>";
        $this->table .= "<td> Kamer Naam</td>";
        $this->table .= "<td> Min aantal punten</td>";
        $this->table .= "<td> Prioriteit</td>";
        $this->table .= "<td> Opties</td>";
        $this->table .= "</tr>";

        while($bedrijf = $result->fetch_assoc()) {
            $this->table .= "<tr>";
            $this->table .= "<td>".$bedrijf["kamerId"]."</td>";
            $this->table .= "<td>".$bedrijf["kamerNaam"]."</td>";
            $this->table .= "<td>".$bedrijf["kamerminpunten"]."</td>";
            $this->table .= "<td>".$bedrijf["kamerPrioriteit"]."</td>";
            $this->table .= "<td><a href='?table=bedrijf'><span class='glyphicon glyphicon-arrow-left'></span> </a><a href='?table=object&bedrijfid=".$bedrijf["bedrijfId"]."&kamerid=".$bedrijf["kamerId"]."'><span class='glyphicon glyphicon-arrow-right'></span> </a>";
            $this->table .= "<a><span class='glyphicon glyphicon-cog' data-toggle='modal' data-target='.upd".$bedrijf["kamerId"]."'></span></a><a><span class='glyphicon glyphicon-trash' data-toggle='modal' data-target='.del".$bedrijf["kamerId"]."'></span></a></td>";
            $this->table .= "</tr>";
        }
        $this->table .= "</table>";
        return $this->table;
    }
    public function objecten()
    {
        $result = $this->db->conn->query($this->db->select("object" , "WHERE kamerId=".$_GET["kamerid"]));
        $this->table = "<table class='table table-striped table-condeced'>";
        $this->table .= "<tr>";
        $this->table .= "<td> Object ID</td>";
        $this->table .= "<td> Object Naam</td>";
        $this->table .= "<td> Gekregen punten</td>";
        $this->table .= "<td> Aantal Objecten</td>";
        $this->table .= "<td> Opties</td>";
        $this->table .= "</tr>";
        while($bedrijf = $result->fetch_assoc()) {
            $this->table .= "<tr>";
            $this->table .= "<td>".$bedrijf["objectId"]."</td>";
            $this->table .= "<td>".$bedrijf["objectNaam"]."</td>";
            $this->table .= "<td>".$bedrijf["objectPunten"]."</td>";
            $this->table .= "<td>".$bedrijf["objectAantal"]."</td>";
            $this->table .= "<td><a href='?table=bedrijf'><span class='glyphicon glyphicon-arrow-left'></span> </a>";
            $this->table .= "<a><span class='glyphicon glyphicon-cog' data-toggle='modal' data-target='.upd".$bedrijf["objectId"]."'></span></a><a><span class='glyphicon glyphicon-trash' data-toggle='modal' data-target='.del".$bedrijf["objectId"]."'></span></a></td>";

            $this->table .= "</tr>";
        }
        $this->table .= "</table>";
        return $this->table;
    }

}
?>