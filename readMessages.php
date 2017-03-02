
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


	$sql = "SELECT * FROM Rechnung";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {


	        echo " ".$row["rechnungsid"]." | Kunde: ". $row["kundenid"] ." | Shop: ". $row["shopid"] . " Summe: " . $row["summe"] . "<br>";
		
	    }


	}else{
		echo "Kein Eintrag";
	}

		?>

		<?php
	$conn->close();
		 ?>

