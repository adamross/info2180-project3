<?php
// Start the session
    if(isset($_POST["login"]))
    {
        session_start();
        
        $_SESSION["username"] = $username;
        echo "Session variables are set for " . $_SESSION["username"] ;
       // include("homepage.html");
    }
    
?>