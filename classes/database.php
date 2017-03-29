<?php
class db{
    public $conn;
    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "zwabber";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function select($tabel , $where=""){
        $sql = "SELECT * FROM ".$tabel. " " . $where;


        return $sql;
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