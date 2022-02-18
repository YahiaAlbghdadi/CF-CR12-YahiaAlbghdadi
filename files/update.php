<?php
require_once '../actions/connection.php';

 
 $database = new Database;
 $conn = $database->conn;
 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM TRIP WHERE id = {$id}";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $locationName = $row['locationName'];
        $location = $row['location'];
        $price = $row['price'];
        $image = $row['image'];
        $longitude = $row['longitude'];
        $latitude = $row['latitude'];
        $description = $row['description'];
    }  
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
  <title>Edit Trip</title>
  <?php require_once '../components/navbar.php'?>
  <style>
      .img-thumbnail {
    width: 60px !important;
    height: 60px !important;
}
  </style>
</head>
<body>
    <div class="container ">
       <h2>Edit</h2>       
       <img class='img-thumbnail rounded-circle'  src='../images/<?= $row['image'] ?>' alt="<?= $locationName ?>">
       <form action="../actions/aUpdate.php" method="post" enctype="multipart/form-data">
           <table  class="table">
               <tr>
                   <th>LOCATION NAME</th>
                   <td><input class="form-control"  type="text"  name ="locationName" placeholder = "Location Name"  value="<?= $locationName ?>"   /></td>
               </tr>
               <tr>
                   <th>TRIP PRICE</th>
                   <td><input class="form-control"  type="text"  name ="price" placeholder = "trip price"  value="<?= $price ?>"   /></td>
               </tr>

               <tr>
               <tr>
                   <th>TRIP DESCRIPTION</th>
                    <td><input class= "form-control " type ="text"  name="description"  placeholder= "trip Description"   value = "<?= $description?>"/></td>
               </tr>
               <tr>
                   <th>TRIP LOCATION</th>
                    <td><input class= "form-control" type ="text"  name="location"  placeholder= "trip Location"   value = "<?= $location?>"/></td>
               </tr>
               <tr>
                   <th>LOCATION LONGITUDE</th>
                    <td><input class= "form-control" type ="text"  name="longitude"  placeholder= "trip logitude"   value = "<?= $longitude?>"/></td>
               </tr>
               <tr>
                   <th>LOCATION LATITUDE</th>
                    <td><input class= "form-control" type ="text"  name="latitude"  placeholder= "trip latitude"   value = "<?= $latitude?>"/></td>
               </tr>

               <tr>
                   <th>IMAGE</th>
                    <td><input  class= "form-control"  type ="file"   name = "image"  /></td>
                </tr>
                <tr>
                    <input   type = "hidden"   name = "id"   value = "<?= $row['id'] ?>"  />
                    <input   type = "hidden"   name = "image"   value = "<?= $image ?>"  />
                    <td><button   name = "submit"   class = "btn btn-success"   type = "submit"> Save Changes </button></td>
                    <td><a href = "details.php?id=<?=$id?>"><button class = "btn btn-warning" type = "button"> Back </button></a></td>
                </tr>
            </table>
        </form>    
</div>
</body>
</html>