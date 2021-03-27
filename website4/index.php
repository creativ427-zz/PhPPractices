<?php 
	require('config/config.php');
    require('config/db.php');

	$query = "SELECT * FROM books";

	$result = mysqli_query($conn, $query);

	$books = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($books);

	mysqli_free_result($result);

	mysqli_close($conn);

?>


	<?php include('inc/header.php'); ?>

	 	<div class="container">
		  <h1>Books</h1>
			<?php foreach ($books as $book) : ?>
				<div class="well">
				  	<h3><?php echo $book['title']; ?></h3>
				  	<p>This book was written by <?php echo $book['author']; ?> ,published by
				  		   <?php echo $book['publisher']; ?>
 							on	<?php echo$book['year_published']; ?>
				  	</p>
				  	<a class="btn btn-default" href="<?php echo ROOT_URL; ?>book.php">See More</a>

				</div>
			<?php endforeach; ?>
        </div>
	<?php include('inc/footer.php'); ?>
