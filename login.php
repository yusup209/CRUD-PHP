<?php  

//koneksi ke database crud_kakarief (login.php)

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


?>


<form method="POST" action="ceklogin.php">
	<table>
		<tr>
			<td>Username : </td>
			<td><input type="text" name="username" placeholder="Username"></td>
		</tr>

		<tr>
			<td>Password : </td>
			<td><input type="password" name="password" placeholder="Password"></td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" name="btnLogin" value="Login!"></td>
		</tr>
	</table>
</form>



	
	