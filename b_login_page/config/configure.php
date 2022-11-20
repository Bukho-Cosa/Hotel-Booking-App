<?php 

class DbConfig {

    private $user = 'root';
    private $password = 'root';
    private $db = 'inventory';
    private $host = 'localhost';
    private $port = 3306;

    

    public function connectToDatabase() {

        $sql = new mysqli(
            $this->user,
            $this->password,
            $this->db,
            $this->host,
            $this->port
        );

        // Check connection
        if ($sql->connect_error) {
            die("Connection failed: " . $sql->connect_error);

        } else {
            //echo "connected successfully";
            return $sql;
        }
    }

}