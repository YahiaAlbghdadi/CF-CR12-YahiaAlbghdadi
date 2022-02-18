<?php 

require_once "connection.php";

$database = new Database;
$conn = $database->conn;
$class = 'd-none';

if ($_POST) {
   $id = $_POST['id'];
   $image = $_POST['image'];
   ($image =="trip.jpg")?: unlink("../images/$image");

  $sql = "DELETE FROM trip WHERE id = {$id}";
  if ($conn->query($sql)) {
   $class = "alert alert-success" ;
   $message = "Successfully Deleted!";
   header("refresh:3;url=../files/index.php");
} else {
   $class = "alert alert-danger";
   $message = "The entry was not deleted due to: <br>" . $conn->error;
}
}


?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>aDelete</title>
       <?php require_once '../components/boot.php' ?> 
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Delete request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?=$message;?></p >
               <a href ='../files/index.php'><button class= "btn btn-success" type='button'>Home</button></a>
            </div>
       </div >
   </body>
</html>
