<?php
error_reporting(0);
require_once 'model/userModel.php';
 

    function redirect($location) {
        header('Location: '.$location);
    }
    
    function handleRequest() {
        $op = isset($_GET['op'])?$_GET['op']:NULL;
        
            if ( !$op || $op == 'list' ) {
               
                listUsers();
            } elseif ( $op == 'new' ) {
                saveContact();
            } else{
                showError("Page not found", "Page for operation ".$op." was not found!");
            }
        }
        
     function listUsers() {
        $contacts = getAllUsers();
        include 'view/listUsers.php';
    }
     function saveContact() {
       
        $title = 'Add new user';
        
        $name = '';
        $password = '';
        $email = '';
        $naiss = '';
       
        if ( isset($_POST['form-submitted']) ) {
            
            $name       = isset($_POST['name']) ?   $_POST['name']  :NULL;
            $password      = isset($_POST['pass'])?   $_POST['pass'] :NULL;
            $email      = isset($_POST['email'])?   $_POST['email'] :NULL;
            $naiss      = isset($_POST['naiss'])? $_POST['naiss']:NULL;
            
            $errors=validate($name, $email,$password, $naiss);  
            if(count($errors)===0){
               createNewUser($name, $email,$password, $naiss);
               redirect('index.php');
               return;   
            }
        }
        include 'view/form-user.php';
    }
    
   function showError($title, $message) {
        include 'view/error.php';
    }
?>
