
		<?php


	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database= "ShopDatenbank";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully to DB " .$database. "<br>";
		?>



<?php

$rechnungsid = $_POST["rechnungsid"];
$kundenid = $_POST["kundenid"];
$shopid = $_POST["shopid"];
$summe = $_POST["summe"];




$sql = "INSERT INTO Rechnung values('$rechnungsid','$kundenid','$shopid','$summe')";

if( $conn->query($sql) === False) {
echo "Error: ". $sql. "<br>". $conn->error;
}

		?>
		<?php
	$conn->close();
		 ?>

