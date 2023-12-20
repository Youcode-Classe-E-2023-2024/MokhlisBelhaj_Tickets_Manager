<?php
class Tags
{
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }
    public function gettags()
    {
        $this->db->query("select * from tag ");
        $result = $this->db->resultSet();
        return $result;
    }

  
    public function insertTag($data)
    {



       $stat = $this->db->query("INSERT INTO `tickettag`(`id_tickt`,`id_tag`) VALUES (:id_tickt,:id_tag)");
        $this->db->bind(':id_tickt', $data['id_tickt']);
        $this->db->bind(':id_tag', $data['id_tag']);
        echo $stat;
        $this->db->execute();

    }
}
