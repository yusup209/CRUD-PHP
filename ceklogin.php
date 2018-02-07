<?php  

//koneksi ke database crud_kakarief (login.php)
include 'conf.php';
session_start();

if (isset($_SESSION['logged'])){
	header("location:index.php");
}

$engi = "mysql";
$host = "localhost";
$dbse = "crud_kakarief";
$user = "root";
$pass = "root";

$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host, $user, $pass);


$username = post('username');
$password = post('password');

$login = $koneksi->prepare("SELECT * FROM user where `username`='".$username."' AND `password`='".$password."'");

$login->execute();
$hasil = $login->fetch(PDO::FETCH_ASSOC);

if(isset($hasil['username'])==1){
	$_SESSION['logged'] = true;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:index.php");
} else {
	header("location:login.php");
}

?>