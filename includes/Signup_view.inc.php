<?php
declare(strict_types=1);
require_once 'Signup.inc.php';

function CheckSignUpErrors(){
       if(!isset($_SESSION["errors_signup"])){
        $errors = $_SESSION["errors_signup"];
        echo  "<br>";
        foreach($errors as $error){
            echo "<p class = 'form-errors'>.$error.</p> ";
        }
        }else {
            unset($_SESSION['errors_signup']);
    }
    
}   
