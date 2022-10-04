<?php
class Conexao
{

    private $server = "mysql:host=localhost;dbname=pessoa";
    private $username = "root";
    private $password = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;

    public function open()
    {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Problema na conexão: " . $e->getMessage();
        }
    }

    public function close()
    {
        $this->conn = null;
    }
}
