

<?php 

    include ('connection.php'); 

    $title = "";
    $discription = "";
    $id= 0;

    $db = mysqli_connect('localhost','root','','bike');

    if (isset($_POST['post']))
     {
    	$title = $_POST['title'];
    	$discription = $_POST['discription'];



    	$query = " INSERT INTO post (title,discription) VALUES ('$title','$discription') ";

    	mysqli_query($db,$query);
    	header('location:post.php');
    }

    $results = mysqli_query($db, "SELECT * FROM post");

   

?>

