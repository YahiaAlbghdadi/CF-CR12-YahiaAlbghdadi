
<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <?php require_once '../components/boot.php'?>
       <title>Create Trip</title>
   </head>
   <body>
   <div class="container p-5">
       <h2>Create new Trip</h2>       
       <form action="../actions/aCreate.php" method="post" enctype="multipart/form-data">
           <table  class="table">
               <tr>
                   <th>LOCATION NAME</th>
                   <td><input class="form-control"  type="text"  name ="locationName" placeholder = "Location Name" /></td>
               </tr>
               <tr>
                   <th>TRIP PRICE</th>
                   <td><input class="form-control"  type="text"  name ="price" placeholder = "trip price"     /></td>
               </tr>

               <tr>
               <tr>
                   <th>TRIP DESCRIPTION</th>
                    <td><input class= "form-control " type ="text"  name="description"  placeholder= "trip Description"   /></td>
               </tr>
               <tr>
                   <th>TRIP LOCATION</th>
                    <td><input class= "form-control" type ="text"  name="location"  placeholder= "trip Location"    /></td>
               </tr>
               <tr>
                   <th>LOCATION LONGITUDE</th>
                    <td><input class= "form-control" type ="text"  name="longitude"  placeholder= "trip longitude"    /></td>
               </tr>
               <tr>
                   <th>LOCATION LATITUDE</th>
                    <td><input class= "form-control" type ="text"  name="latitude"  placeholder= "trip latitude"   /></td>
               </tr>

               <tr>
                   <th>IMAGE</th>
                    <td><input  class= "form-control"  type ="file"   name = "image"  /></td>
                </tr>
                <tr>
                    <input   type = "hidden"   name = "id" />
                    <input   type = "hidden"   name = "image"/>
                    <td><button   name = "submit"   class = "btn btn-success"   type = "submit"> Save Changes </button></td>
                    <td><a href = "index.php"><button class = "btn btn-warning" type = "button"> Back </button></a></td>
                </tr>
            </table>
        </form>    
</div>
   </body>
</html>