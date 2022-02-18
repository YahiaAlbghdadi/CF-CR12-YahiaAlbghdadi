<?php
require_once 'connection.php';
require_once 'fileUpload.php';
  
$database = new Database;
$conn = $database->conn;

$class = 'd-none';
if (isset($_POST["submit" ])) {
    $id = $_POST['id'];
    $locationName = $_POST['locationName'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $description = $_POST['description'];
    $imageArray = fileUpload($_FILES['image']);
    $image = $imageArray->fileName;
    $uploadError = '';    

   if ($imageArray->error == 0) {      
       ($_POST["image"] == "trip.png") ?: unlink("../images/$_POST[image]");
       $sql = "UPDATE  trip  SET price = $price, description ='$description', longitude ='$longitude', latitude ='$latitude', locationName ='$locationName', image ='$image', location ='$location' WHERE id = {$id}";
   } else {
       $sql = "UPDATE  trip  SET price = $price, description ='$description', longitude =$longitude, latitude =$latitude, locationName ='$locationName', location ='$location' WHERE id = {$id}";
   }
    if ($conn->query($sql)) {    
       $class = "alert alert-success";
       $message = "The record was successfully updated";
       $uploadError = ($imageArray->error != 0) ? $imageArray->ErrorMessage : '';
       header("refresh:3;url=../files/details.php?id={$id}");
   } else {
       $class = "alert alert-danger";
       $message = "Error while updating record : <br>" . $conn->error;
       $uploadError = ($imageArray->error != 0) ? $imageArray->ErrorMessage : '';
   }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aUpdate</title>
    <?php require_once '../components/boot.php'?>
</head>
<body>
<div class ="container">
   <div class="<?php echo $class; ?>"  role="alert">
       <p><?php echo ($message) ?? ''; ?></p>
        <p><?php echo ($uploadError) ?? ''; ?></p>       
    </div>
</div>

</body>
</html>

