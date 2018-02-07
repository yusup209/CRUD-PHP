<?php  

//koneksi ke database crud_kakarief

session_start();

if (!isset($_SESSION['logged'])){
	header("location:login.php");
}

$engi = "mysql";
$host = "localhost";
$dbse = "crud_kakarief";
$user = "root";
$pass = "root";

$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host, $user, $pass);


?>
