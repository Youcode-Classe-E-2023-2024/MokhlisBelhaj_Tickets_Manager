<?php
class Commentaires
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getcommentaires($id)
    {
        $this->db->query("SELECT 
        c.`id`,
        c.`contenu`,
        c.`created_at`,
        c.`id_user`,
        c.`id_ticktet`,
        u.`name` AS user_name
    FROM 
        `commentaires` c
    JOIN 
        `users` u ON c.`id_user` = u.`id`
    WHERE 
        c.`id_ticktet` = :id_ticktet;
        ORDER BY c.`created_at` ASC
      ");
        $this->db->bind(':id_ticktet', $id);
        $result = $this->db->resultSet();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    public function insertcommentaires($data)
    {
       
        $this->db->query("INSERT INTO `commentaires`( `contenu`, `id_user`, `id_ticktet`) VALUES ( :contenu,:id_user,:id_ticktet)");
        $this->db->bind(':contenu',$data['contenu']);
        $this->db->bind(':id_user',$_SESSION['user_id']);
        $this->db->bind(':id_ticktet',$data['id_ticktet']);
        $this->db->execute();
        
    }
}
