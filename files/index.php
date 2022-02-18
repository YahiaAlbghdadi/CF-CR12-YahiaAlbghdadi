<?php
    require_once "../actions/connection.php";
    require_once "../actions/aSearch.php";


    $database = new Database;
    $conn = $database->conn;

    $rows = $database->read("trip");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php require_once "../components/navbar.php" ?>
    <div class="parent row" id="searchedResult">
        <?=$trips?>
    </div>
    <?php require_once "../components/footer.php" ?>

    <script>
function loadDoc() {
let xhttp = new XMLHttpRequest(); 
xhttp.onload = function() {
    if (this.status == 200 ) {
        document.getElementById("searchedResult").innerHTML = this.responseText;
    }
};

var trip = document.getElementById("trip").value;
xhttp.open("GET", '../actions/aSearch.php?trip='+trip , true); 
xhttp.send();
}
document.getElementById("trip").addEventListener("keyup", loadDoc);
</script>
</body>
</html>