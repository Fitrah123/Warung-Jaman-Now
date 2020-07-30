<html>
<head>
<title>Pesanan_Ulasan</title>
</head>
<style>
form {
	border: 0px solid #024560;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}


td.textcenter{
	text-align:center;
	}
</style>

<body>
<h1 style="text-align: center" size=5px> Pesanan dan Ulasan pelanggan </h1>
<?php
$conn = mysqli_connect('localhost', 'root','','warungjamannow');

if($conn) {
	echo "";
}
else {
	echo "Error DB Connection";
}
$query = "SELECT * FROM `customer`";
if($result = mysqli_query($conn,$query)){
	echo "";
}
else{
	echo "Query Error";
}
echo "<table>
	<tr>
		<th>Nama</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Messege</th>
	</tr>";
	
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr>
		<td>".$row['name']."</td>
		<td>".$row['email']."</td>
		<td>".$row['subject']."</td>
		<td>".$row['messege']."</td>
	</tr>";
}
echo "</table>";


mysqli_close($conn);
?>
</body>
</html>