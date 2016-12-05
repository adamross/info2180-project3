<?php
if(isset($_POST["login"]))
{
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'projdb';
    
    try{
        //Create Connection With The Database
     
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
       
    	//echo "Connection Made";
    	// set the PDO error mode to exception
    

        
        $type=$_POST['Type'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $hash = md5($password);
        
        
        if($type == 'admin'){
          
      
             $stmt = $conn->query("SELECT * FROM User WHERE id = 1 ");   
             
			
			           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach ($results as $row) {
                   //echo "In results";
                   if($row['username'] == $username){
                      //echo "Username in database is:" . $row['username'] ;
                      //echo "Username is:" .  $username ;
                      $usernameok = true;
                   }else {
                      //echo "Username in database is:" . $row['username'] ;
                     // echo "Username is:" .  $username ;
                       $usernameok=false;
                   }
                   if($row['password'] == $hash){
                      //echo "Password in database is:" .$row['password'] ;
                      //echo "Password is:" .  $hash ;
                       $passwordok = true;
                   }
                   else{
                    //  echo "Password in database is:" .$row['password'] ;
                     // echo "Password is:" .  $hash ;
                       $passwordok = false;
                   }
                // echo $ok;  
              }
              if($usernameok == true && $passwordok ==true) { 
                 //echo "Admin" ;
                 include("adduserform.html"); 
                  
              }
              else{
               
                  include("userlogin.html");
              }
              
        }
        else{
              $stmt = $conn->query("SELECT * FROM User ");   
             //echo "In else" . "\n";
			          $userfound =false;
			          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach ($results as $row) {
                  
                 if($row['username'] == $username){
                    // echo "Username in database is:" . $row['username'] . "\n";
                    $ok = true;
                   }else {
                   // echo "Username in database is:" . $row['username']  . "\n" ;
                    // echo "Username is:" .  $username . "\n" ;
                       $ok=false;
                   }
                   if($row['password'] == $hash){
                      //echo "Password in database is:" .$row['password']. "\n" ;
                      //echo "Password is:" .  $hash . "\n";
                       $ok = true;
                   }
                   else{
                  //  echo "Password in database is:" .$row['password'] . "\n";
                    // echo "Password is:" .  $hash. "\n" ;
                       $ok = false;
                   }
                   
                   if($ok){$userfound=true;}
              }
              
              if($userfound) { 
                        //echo "Everything is ok";
                        session_start();

                        $_SESSION["username"] = $username;
                       
                        include("home.html");
              }
              else {
               
                   include("userlogin.html");
              }
              
        }
        
        
        
        //Send the Information To The Database

       
    }
    catch(PDOException $e)
	{	
		echo $sql . "<br>" . $e->getMessage();;
	}
}
?>