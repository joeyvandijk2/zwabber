<?php
class db{
    private $conn;
    private function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "zwabber";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    public function select($tabel){
        $sql = "SELECT * FROM ".$tabel ;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
           return $result;
        }
        else{
            return "niets gevonden";
        }
    }

    public function update($tabel, $set, $where)
    {
        $sql = "UPDATE " . $tabel . " SET " . $set . " WHERE " . $where;

        if ($this->conn->query($sql) === TRUE) {
            return "updated";
        } else {
            return "error with updating";
        }
    }
    public function delete($tabel, $where){
        $sql = "DELETE FROM ".$tabel." WHERE ".$where;

        if ($this->conn->query($sql) === TRUE) {
            return "deleted";
        }
        else{
            return "error with deleting";
        }
    }
    public function create($tabel, $rijen, $values){
        $sql = "INSERT INTO ".$tabel." (".$rijen.") VALUES (".$values.")";

        if ($this->conn->query($sql) === TRUE) {
            return "created";
        }
        else{
            return "error with creating";
        }
    }
}
?>