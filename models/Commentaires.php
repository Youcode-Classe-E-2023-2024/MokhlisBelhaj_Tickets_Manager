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
        $this->db->query("SELECT `id`, `contenu`, `created_at`, `id_user`, `id_ticktet` FROM `commentaires` WHERE `id_ticktet`=:id_ticktet   ");
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
