<?php
class controller{
    public function model($model){
      // echo$model;
      // die();
       
        require_once './models/' . $model . '.php';
  
   
        return new $model();
      }
  
      
      public function view($view, $data = []){
   
      
        if(file_exists('./view/' . $view . '.php')){
          require_once './view/' . $view . '.php';
        } else {
        
          die('View does not exist');
        }
      }

}