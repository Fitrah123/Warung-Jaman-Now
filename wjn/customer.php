<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$messege = $_POST['messege'];
$conn = mysqli_connect('localhost', 'root','','warungjamannow');
if($conn) {
	echo "DB Connected<br><br>";
}
else {
	echo "Error DB Connection";
}
$query = "INSERT INTO customer VALUES ('".$name."','".$email."','".$subject."','".$messege."')";
if($result = mysqli_query($conn,$query)){
	echo "Query OK";
}
else{
	echo "Query Error";
}

mysqli_close($conn);
?>