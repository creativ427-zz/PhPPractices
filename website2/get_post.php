<?php
    //using method "GET"
    if(isset($_GET['name'])){
        //print_r($_GET);
        //echo'<br>';
        $name = htmlentities($_GET['name']); 
        //$email = htmlentities($_GET['email']);
        //echo $name;
    }
    /*
    //using method "POST
    if(isset($_POST['name'])){
        print_r($_POST);
        echo'<br>';
        $name = htmlentities($_POST['name']); 
        $email = htmlentities($_POST['email']);
        echo $name. $email;

    } 

    //using request
    if(isset($_REQUEST['name'])){
        print_r($_REQUEST);
        echo'<br>';
        $name = htmlentities($_REQUEST['name']); 
        $email = htmlentities($_REQUEST['email']);
        echo $name. $email;

    } 
//using server global
echo $_SERVER("QUERY_STRING");
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <form method="GET" action="get_post.php">
    <div>
        <label >Name</label><br>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Email</label><br>
        <input type="text" name="email">
    </div>
        <input type="submit" value="submit">
    </form>
    <ul>
        <li>
           <a href="get_post.php?name="Purity">Purity</a>
        </li>
        <li>
           <a href="get_post.php?name="Nigga">Nigga</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Page"; ?></h1>
</body>
</html>