<?php  
        require_once "../actions/connection.php";

        $database = new Database;
        $conn = $database->conn;
        $id = $_GET['id'];
        $sql = "SELECT * FROM trip where id = $id";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);    
        $trips = "";
        $upperLocation = strtoupper($row['location']);
        $trips .= "<div class='main col-lg-4 col-md-6 col-sm-12'>
        <img src='../images/{$row['image']}' class='image m-3' alt=''>
        <h6 class='location'>
            {$upperLocation}
        </h6>
        <h4 class='title'>
            {$row['locationName']}
         </h4>
         <hr class='horz'>
        <p class='description'>
            {$row['description']}
        </p>
        <p price: class='price mt-4'>
            PRICE: €{$row['price']}
        </p>
        </div>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>#map {
                        height: 50%;
                    width: 40%;
                    margin: 30px auto;
                }
               html, body {
                        height: 100%;
                    margin: 0;
                    padding: 0;
                }
                .double {
            margin: 10px auto;
        border: 2px solid black;
        border-radius: 10px;
        width: 80px;
    }
    .f{
            border: 1px solid red;
        margin: 1px auto;
    }
            </style>
</head>
<body>
<?php require_once "../components/navbar.php" ?>
<div class="parent row">
        <?=$trips?>

    </div>
    <div id="map"></div>

            
            

    <hr class="double">
    <hr class="double">
    <div class="d-flex  ">
        <a class="btn btn-danger f" href="delete.php?id=<?=$id?>">
            Delete
        </a>
        <a class="btn btn-warning f" href="update.php?id=<?=$id?>">
            Edit
        </a>
    </div>


<script>
                var map;
                function initMap() {
                    var location = {
                            lat: <?=$row['latitude']?>,
                            lng: <?=$row['longitude']?>
                    };
                    map = new google.maps.Map(document.getElementById('map' ), {
                    center: location,
                    zoom: 8
                    });
                    var pinpoint = new google.maps.Marker({
                    position: location,
                    map: map
                    });
                            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"  async defer></script>

</body>
</html>

