<?php
if(isset($_POST["submit"]))
{
	$errorMessage = "";
		
    $host = getenv('IP');
    $username = getenv('me');
    $password = '';
    $dbname = 'CheapoMail';
	try {
		//set up connection
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		if(empty($_POST['lastName'])) 
        {
			alert ("Enter your last name");
		}
		if(empty($_POST['firstN'])) 
        {
			alert ("Enter your first name");
		}
		if(empty($_POST['userN'])) 
        {
			alert ("Enter your username");
		}
			if(empty($_POST['PassW'])) 
        {
			alert ("Enter your password");
		}

        $firstn = $_POST['firstName'];
		$lastn = $_POST['lastName'];
		$usern = $_POST['userName'];
		$password=$_POST['password'];
		// convert password
	     $hash = md5($password);
	
        echo $firstn;
        echo  $lastn;
        echo $usern;
        echo $hash; 
		if(empty($errorMessage)) 
		{
		    
			$sql = "INSERT INTO Users (firstname, lastname, username, password) VALUES ('$firstn', '$lastn' , '$usern' ,  '$hash')";
			
			$conn->exec($sql);
            echo "<script>window.location = 'userlogin.html'</script>";
		}
		else
		{
		    echo "THERE IS AN ERROR MESSAGE ->";
		    echo $errorMessage;
		}

	}	catch(PDOException $e)
		{	
			echo "Error";
			echo $sql . "<br>" . $e->getMessage();
		}
}