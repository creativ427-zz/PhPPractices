<?php
	$conn = mysqli_connect("localhost", "root", "123456", "phplibrary");

	if(mysqli_connect_errno()){
		echo"mysql failed".mysqli_connect_errno();
	}
	


?>

<?php
$hostname='localhost';
$username='root';
$password='123456';
$db='phplibrary';

$dbh = new PDO("mysql:host=$hostname;dbname=$db",$username,$password);
?>
