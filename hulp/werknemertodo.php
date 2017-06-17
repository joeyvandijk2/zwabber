<?php
class werknemertodo
{
    private $table;
    private $db;
    public function todo(){
        $this->db = new db();
        $result = $this->db->conn->query($this->db->select("kamer", "WHERE werknemerId=" . $_SESSION["wid"]));

            $this->table = '<table class="table table-hover todo">';
            $this->table .= '<h2> To do </h2>';
            $this->table .= '<tr>';
            $this->table .= '<th>er is niet te doen</th>';
            $this->table .= '</tr>';
            $this->table .= "</table>";
        
        while($kamer = $result->fetch_assoc())
        {
            $results = $this->db->conn->query($this->db->select("bedrijf", "WHERE bedrijfId=" . $kamer["bedrijfId"]));
            while($bedrijf = $results->fetch_assoc()) {
                $this->table = '<table class="table table-hover todo">';
                $this->table .= '<h2> To do </h2>';
                $this->table .= '<tr>';
                $this->table .= '<th>bedrijf naam</th>';
                $this->table .= ' <th>kamer naam</th>';
                $this->table .= '<th>kamer nummer</th>';
                $this->table .= ' <th>minimum punten</th>';
                $this->table .= '</tr>';
                $this->table .= '<tr>';
                $this->table .= '<td><a href="index.php?table=kamer&bedrijfid='.$bedrijf["bedrijfId"].'"> '.$bedrijf["bedrijfNaam"].'</a></td>';
                $this->table .= '<td>'.$kamer["kamerNaam"].'</td>';
                $this->table .= '<td>'.$kamer["kamerId"].'</td>';
                $this->table .= '<td>'.$kamer["kamerminpunten"].'</td>';
                $this->table .= '</tr>';
                $this->table .= "</table>";
            }
        }
        return $this->table;
    }

}