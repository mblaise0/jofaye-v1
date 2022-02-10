<?php
 require 'php/config.php';
 require 'php/functions.php';

    $db_obj = new Database();
    $db_connection = $db_obj->dbConnection();
    
    $volunteer_obj = new User($db_connection);
    $contact_obj = new User($db_connection);
    $newsletter_obj = new User($db_connection);
    $message_obj = new User($db_connection);

?>