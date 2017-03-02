
		<?php


	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database= "ShopDatenbank";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

$rechnungsid = $_POST["rechnungsid"];
$kundenid = $_POST["kundenid"];
$shopid = $_POST["shopid"];
$summe = $_POST["summe"];

$s1="rechnungsid = ". $rechnungsid;
$s2="kundenid = ".$kundenid;
$s3="shopid = ".$shopid;
$s4="summe = ".$summe;
$s0="";
$first = true;

if($rechnungsid >0){
	$s1=" WHERE ".$s1;
	$s0=$s0.$s1;
	$first=false;
}
if($kundenid >0){
	if($first){
		$s2=" WHERE ".$s2;
		$first = false;
	}
	$s0=$s0.$s2;
}
if($shopid >0){
	if($first){
		$s3=" WHERE ".$s3;
		$first = false;
	}
	$s0=$s0.$s3;
}
if($summe >0){
if($first){
$s4=" WHERE ".$s4;
}
$s0=$s0.$s4;
}

$sql = "Select * FROM Rechnung";
if($s0 != ""){
$sql = $sql. $s0;
}

echo "Suche". $sql;

$result = $conn->query($sql);

	if ($result->num_rows > 0) {

	    // output data of each row
	    while($row = $result->fetch_assoc()) {


	        echo " ".$row["rechnungsid"]." | Kunde: ". $row["kundenid"] ." | Shop: ". $row["shopid"] . " Summe: " . $row["summe"] . "<br>";
		
	    }


		?>
		<?php
	$conn->close();
		 ?>

