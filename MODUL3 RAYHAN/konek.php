<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_modul3";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}



function query($query) {
	global $connect;
	$result = mysqli_query($connect, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
 	$rows [] = $row;
	}
	return $rows;
}
?>