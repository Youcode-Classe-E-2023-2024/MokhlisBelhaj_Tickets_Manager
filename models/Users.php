<?php
class Users {
    private $db;
   
   public function __construct(){
       $this->db = new Database;
    
   
   
       }
       public function signIn($email,$password){
        $this->db->query("SELECT * from users WHERE email=:email");
        $this->db->bind(':email', $email);

        $row=$this->db->single();
        $hashed_password = $row->password;
        if(password_verify($password,$hashed_password)){
        return $row;
       }else{
        return false;
       }
       }
       public function getTotalUsersCount()
{
    $this->db->query("SELECT COUNT(*) as user_count FROM users");

    $result = $this->db->single();

    if ($result) {
        return $result->user_count;
    } else {
        return 0; 
    }
}
    
       public function signUp($data){
        $this->db->query(
            "INSERT INTO users (`name`, email, `password`) VALUES (:name, :email, :password)"
        );
    //    bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
               // Execute the query
               if( $this->db->execute()){
                return true;
               }else{
                return false;
               }
       }

   
    
   
    public function FindUserbyEmail($email){
        $this->db->query("select * from users where email = :email");
        $this->db->bind(':email', $email);
        $row =$this->db->single();
        if( $this->db->rowcount() >0 ){
            return true;
        }else{
             return false;
        }
    }
    


    public function getUser(){
        $this->db->query("select * from users ");
        $result = $this->db->resultSet();
        return $result;
    }
    public function getUserByID($id){
        $this->db->query("select name,email from users where userId = :id");
        $this->db->bind(':id', $id);
        $row =$this->db->single();
        if( $this->db->rowcount() >0 ){
            return $row;
        }else{
             return false;
        }
    }
    public function deleteuserById($data){
        $this->db->query("DELETE FROM  users WHERE userId=:id");
        $this->db->bind(':id',$data); 
        if($this->db->execute()){
            return true;
          } else {
            return false;
          }

    }
    public function updateuser($data){
        $this->db->query("UPDATE users SET `name`=:name,`email`=:email WHERE userId=:userId ");
           $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':userId', $data['userId']);
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
    
    }
    public function insertAssigne($data){
        
       
        $this->db->query("INSERT INTO `assignation`(`id_user`, `id_ticket`) VALUES (:id_user,:id_tickt)");
        $this->db->bind(':id_tickt', $data['id_tickt']);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->execute();
        // print_r($this->db->execute());
       
    }

   
}