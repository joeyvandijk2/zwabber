<?php
class werknemerinfo{
    private $table;
    public function werkinfo(){
        $result = $this->db->conn->query($this->db->select("werknemer", "WHERE werknemerId=" . $_GET["wid"]));
        while($werknemer = $result->fetch_assoc())
        {
            $this->table = '<table class="table table-condensed">';
            $this->table = '<h2> Werknemer info </h2>';
            $this->table = '<tr class="active">';
            $this->table = '<th>Naam:</th>';
            $this->table = '<td>'.$werknemer['werknemerNaam'].'</td>';
            $this->table = '</tr>';
            $this->table = '<tr class="active">';
            $this->table = '<th>Plaats:</th>';
            $this->table = '<td>'.$werknemer['werknemerPlaats'].'</td>';
            $this->table = '</tr>';
            $this->table = '<tr class="active">';
            $this->table = '<th>Telefoon nummer:</th>';
            $this->table = '<td>'.$werknemer['werknemerTelefoon'].'</td>';
            $this->table = '</tr>';
            $this->table = '<tr class="active">';
            $this->table = '<th>Email:</th>';
            $this->table = '<td>'.$werknemer['werknemerEmail'].'</td>';
            $this->table = '</tr>';
            $this->table = '<tr class="active">';
            $this->table = '<th>Geslacht:</th>';
            $this->table = '<td>'.$werknemer['werknemerGeslacht'].'</td>';
            $this->table = '</tr>';
            $this->table .= "</table>";

        }
        return $this->table;
    }
}
?>