<?php
class table
{
    private $table;
    private $db;
    private function __construct()
    {
        $this->db = new db();
    }
    public function bedrijfen()
    {
        $this->table = "<table>";
        $this->table .= "<tr>";
        $this->table .= "<td> Bedrijf ID</td>";
        $this->table .= "<td> Bedrijf Naam</td>";
        $this->table .= "<td> Bedrijf Plaats</td>";
        $this->table .= "<td> Bedrijf Telefoon</td>";
        $this->table .= "<td> Opties</td>";
        $this->table .= "</tr>";
        while($bedrijf = $this->db->select()->fetch_assoc()) {
             $this->table .= "<tr>";
             $this->table .= "<td>".$bedrijf["bedrijfId"]."</td>";
             $this->table .= "<td>".$bedrijf["bedrijfNaam"]."</td>";
             $this->table .= "<td>".$bedrijf["bedrijfPlaats"]."</td>";
             $this->table .= "<td>".$bedrijf["bedrijfTelefoon"]."</td>";
             $this->table .= "<td>Opties</td>";
             $this->table .= "</tr>";
        }
        $this->table .= "</table>";
        return $this->table;
    }
    public function kamers()
    {
        $this->table = "<table>";
        $this->table .= "<tr>";
        $this->table .= "<td> Kamer ID</td>";
        $this->table .= "<td> Kamer Naam</td>";
        $this->table .= "<td> Min aantal punten</td>";
        $this->table .= "<td> Prioriteit</td>";
        $this->table .= "<td> Prioriteit</td>";
        $this->table .= "<td> Opties</td>";
        $this->table .= "</tr>";
        while($bedrijf = $this->db->select()->fetch_assoc()) {
            $this->table .= "<tr>";
            $this->table .= "<td>".$bedrijf["kamerId"]."</td>";
            $this->table .= "<td>".$bedrijf["kamerNaam"]."</td>";
            $this->table .= "<td>".$bedrijf["kamerminpunten"]."</td>";
            $this->table .= "<td>".$bedrijf["kamerprioriteit"]."</td>";
            $this->table .= "<td>Opties</td>";
            $this->table .= "</tr>";
        }
        $this->table .= "</table>";
        return $this->table;
    }
    public function objecten()
    {
        $this->table = "<table>";
        $this->table .= "<tr>";
        $this->table .= "<td> Object ID</td>";
        $this->table .= "<td> Object Naam</td>";
        $this->table .= "<td> Gekregen punten</td>";
        $this->table .= "<td> Aantal Objecten</td>";
        $this->table .= "<td> Opties</td>";
        $this->table .= "</tr>";
        while($bedrijf = $this->db->select()->fetch_assoc()) {
            $this->table .= "<tr>";
            $this->table .= "<td>".$bedrijf["objectId"]."</td>";
            $this->table .= "<td>".$bedrijf["objectNaam"]."</td>";
            $this->table .= "<td>".$bedrijf["objectPunten"]."</td>";
            $this->table .= "<td>".$bedrijf["ObjectAantal"]."</td>";
            $this->table .= "<td>Opties</td>";
            $this->table .= "</tr>";
        }
        $this->table .= "</table>";
        return $this->table;
    }

}
?>