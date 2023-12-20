<?php
session_start();

 define('APPROOT', dirname(dirname(__FILE__)));

 define('URLROOT', 'http://localhost/MokhlisBelhaj_Tickets_Manager/');

 define('SITENAME', 'helpdesk-Ticketing');
 

//  database 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');


function redirect($page){
    header('Location:'.URLROOT.$page);

}