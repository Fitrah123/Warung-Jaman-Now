<?php
include "db_con.php";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$messege = $_POST['messege'];


	//tambah
	$query = mysql_query("insert into customer values (
							'$name',
							'$email',
							'$subject',
							'$messege')") or die(mysql_error());
	if($query){
		echo "<script>alert('Berhasil Tambah Data');location.href='../../menu.html';</script>";
	}else{
		echo "<script>alert('Gagal Tambah Data');location.href='../../menu.html';</script>";
	}


?>