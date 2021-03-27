<?php 
	require('config/config.php');
    require('config/db.php');

    if (isset($_POST['submit'])){
		    // $title = mysqli_real_escape_string($conn, $_POST['title']);
        // $author = mysqli_real_escape_string($conn, $_POST['author']);
        // $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);

        // $query="INSERT INTO books (title,author,publisher) VALUES ($title, $author,$publisher) "
        try {
          // $dbh = new PDO("mysql:host=$hostname;dbname=college",$username,$password);
          
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
          $sql = "INSERT INTO books (title,author,publisher)
          VALUES ('".$_POST["title"]."','".$_POST["author"]."','".$_POST["publisher"]."')";
          if ($dbh->query($sql)) {
          echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
          }
          else{
          echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
          }
          
          $dbh = null;
          }
          catch(PDOException $e)
          {
          echo $e->getMessage();
          }
          
          }

?>


	<?php include('inc/header.php'); ?>

	 	<div class="container">
		  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
          <label> Title </label>
          <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
          <label> Author </label>
          <input type="text" name="author" class="form-control">
          </div>
          <div class="form-group">
          <label> published By </label>
          <input type="text" name="publisher" class="form-control">
          </div>
          <input type="submit" value="submit" name="submit" class="btn btn-secondary">
          </form>	
        </div>
	<?php include('inc/footer.php'); ?>
