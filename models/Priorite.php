<?php
class Priorite{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getpriorite(){
        $this->db->query("select * from priorite ");
        $result = $this->db->resultSet();
        return $result;
    }
}