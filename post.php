<?php include ('conn.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>
 <a href="welcome.php"> <input type="button" name="back" value="BACK">  </a>
    
<table>
  <thead>
    <tr>
      <th> Title </th>
      <th> Discription </th>
      <th colspan="2"> Action </th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_array($results)) { ?>


    <tr>
      <td> <?php echo $row['title']; ?> </td>
      <td> <?php echo $row['discription']; ?> </td>
      <td>
        <a href="#"> Edit </a>
      </td>
      <td>
        <a href="#"> Delete </a>
      </td> 

    </tr>
 <?php  } ?>
  </tbody>
  
</table>




</body>
</html>