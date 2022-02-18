<?php

require_once "../actions/connection.php";


$database = new Database;
$conn = $database->conn;


if($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM trip WHERE id = {$id}" ;
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result) == 1) {
      $locationName = $row['locationName' ];
      $price= $row['price'];
      $location = $row['location'];
      $image = $row['image'];
} }


?>

<!DOCTYPE html>
<html lang="en" >
<head>
   <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
   <title>Delete Trip</title>
    <?php require_once '../components/boot.php' ?>
</head>
<body>
<div  class="<?= $class; ?>" role="alert" >
       <p><?= ($message) ?? ''; ?></p>           
</div>
<fieldset>
<legend class='h2 mb-3' >Delete request <img class= 'img-thumbnail rounded-circle'  src='../images/<?= $row["image"] ?>' alt="<?= $locationName ?>"></legend >
<h5>You have selected the data below: </h5>
<table  class="table w-75 mt-3">
<tr>
           <td>Name: <?="$locationName "?></td>
           <td>Age: <?= $price?></td>
           <td>Location: <?= $location?></td>

</tr>
</table>

<h3 class="mb-4" >Do you really want to delete this Trip?</h3 >
<form action="../actions/aDelete.php"  method="post">
  <input type="hidden" name ="id" value= "<?= $id ?>" />
  <input type= "hidden" name= "image" value= "<?= $image ?>" />
  <button class="btn btn-danger"  type="submit"> Yes, delete this Trip! </button  >
  <a  href="details.php?id=<?=$id?>" ><button  class="btn btn-warning"  type= "button">No, go back!</button></a>
</form >
</fieldset>
</body>
</html >