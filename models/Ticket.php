<?php
class ticket
{
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }
    public function insertTicket($data)
    {
        // Set default values
        $data['id_user'] = $_SESSION['user_id'];
        $data['id_statu'] = 1;



        // Bind parameters
        $this->db->query("INSERT INTO `ticket`(`titre`, `description`, `id_user`, `id_statu`, `id_priorite`) 
        VALUES (:titre, :description, :id_user, :id_statu, :id_priorite)");
        $this->db->bind(':titre', $data['titre']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':id_statu', $data['id_statu']);
        $this->db->bind(':id_priorite', $data['priorite']);
        $this->db->execute();
       

        // Execute the query
        if ($this->db->execute()) {
            $lastInsertedId = $this->db->lastInsertId();
            return $lastInsertedId;
        } else {

            return false;
        }
    }
    public function alltiket()
    {
        $this->db->query("SELECT t.id AS ticket_id,t.titre AS ticket_title,t.description AS ticket_description,u.id AS user_id,u.name AS  priority_id,p.title AS priority_title,p.color AS priority_color,s.id AS status_id,s.title AS status_title,s.color AS status_color FROM ticket t LEFT JOIN users u ON t.id_user = u.id LEFT JOIN priorite p ON t.id_priorite = p.id LEFT JOIN statu s ON t.id_statu = s.id ORDER BY t.id; ");
        $result=$this->db->resultset();
        if ($result){
            echo( json_encode($result));         
         
        }else{
            echo json_encode(['error' => 'Failed to fetch data']);
        }
    }
}
