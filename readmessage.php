 <?php
    if (isset($_GET['clicked'])) 
  // call removeday() here

{
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'projdb';
    
    try{
        //Create Connection With The Database
      
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "Establish connection";
       
        $reader = $_GET['readerid'];
        $msg_id = $_GET['id'];
        
       	$sql = "INSERT INTO Message_read (message_id, reader_id, date) VALUES ('$msg_id', '$reader' , CURDATE())";
			// use exec() because no results are returned
		$conn->exec($sql); 
		
		echo "Message is read";
    }catch(PDOException $e)
	{	
		echo $sql . "<br>" . $e->getMessage();;
	}
}
 ?>