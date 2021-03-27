<?php 
	require('config/config.php');
    require('config/db.php');
    
    // //if (isset($_GET['id'])){
	// $id = $_POST["id"];	
	// // $id = mysqli_real_escape_string($conn, $_GET['id']);
	
	// $query = "SELECT * FROM books WHERE id = ?";

	// $result = mysqli_query($conn, $query);
	// //print"$result";

	// $book = mysqli_fetch_assoc($result);
	// //var_dump($books);

	// mysqli_free_result($result);

	// mysqli_close($conn);
	if ($_POST){
		$id = $_POST['id'];
		$sql = "SELECT * FROM books WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':id',$id,PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$data = $stmt->fetchAll();
	}
	

?>

<?php include('inc/header.php'); ?>
		    <div class="container">
		    	<a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
				<h1><?php echo $stmt['title']; ?></h1>
				<p>This book was written by <?php echo $stmt['author']; ?> ,published by
				<?php echo $stmt['publisher']; ?>
 				on	<?php echo $stmt['year_published']; ?>
				</p>
            </div>		  
<?php include('inc/footer.php'); ?>
