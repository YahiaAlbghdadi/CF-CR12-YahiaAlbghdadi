<?php
 
    require_once "connection.php";
    require_once "fileUpload.php";

    $database = new Database;
    $conn = $database->conn;


    if($_POST){
        $locationName = $_POST['locationName'];
        $location = $_POST['location'];
        $price = $_POST['price'];
        $longitude = $_POST['longitude'];
        $latitude = $_POST['latitude'];
        $description = $_POST['description'];
        $imageArray = fileUpload($_FILES['image']);
        $image = $imageArray->fileName;

        $uploadError = "";

        $sql = "INSERT INTO trip(price, description, longitude, latitude, locationName, image, location) VALUES ($price,'$description', '$longitude', '$latitude','$locationName','$image','$location')";
        
        if($conn->query($sql)){
            $class = "success";
            $message = "The entry below was successfully created <br>
                 <table class='table w-50'><tr>
                 <td> $locationName </td>
                 <td> $location </td>
                 </tr></table><hr>";
            $uploadError = ($imageArray->error != 0)? $imageArray->ErrorMessage :'';
        } else {
            $class = "danger";
            $message = "Error while creating record. Try again: <br>" . $conn->error;
            $uploadError = ($imageArray->error !=0)? $imageArray->ErrorMessage :'';
        }

     } 

    
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>aCreate</title>
       <?php require_once '../components/boot.php' ?>
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Create request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../files/index.php'><button class="btn btn-primary"  type='button'>Home</button ></a>
           </div >
       </div>
   </body>
</html>

