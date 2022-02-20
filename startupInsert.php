<?php
	$companyname = $_POST['companyname'];
	$description = $_POST['description'];
	$identity = $_POST['identity'];

	// Database connection
	$conn = new mysqli('localhost','root','root','startups');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(companyname, description, identity) values(?, ?, ?)");
		$stmt->bind_param("sss", $companyname, $description $identity);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>