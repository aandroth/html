<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "pass";
 $db = "kanban_board";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
	$conn -> close();
 }

 $conn = OpenCon();

$sql = "SELECT * FROM kbusers";
if($result = $conn->query($sql)){
}
else {
	echo "Query fail!";
}

while($row = $result->fetch_assoc()) {
	
	echo "{idx: " . $row["userIdx"] . ", name: " . $row["userName"] . ", email: " . $row["userEmail"] . "}";
	}

 CloseCon($conn);
   
   ?>