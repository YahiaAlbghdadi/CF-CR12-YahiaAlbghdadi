 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <?php require_once "boot.php" ?>
    <style>
        .navi{
            font-size: small;
        }
        .sozialMedia{
            color: white
        }

        @media  (min-width: 992px) {
            .centering{
                align-items: center;
            }
        }
    </style>
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Mount Everest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0  centering text-white">
        <li class="nav-item">
          <a class="nav-link p-0 m-0 pe-2 active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item  ">
        <a class="nav-link m-0  p-0 pe-2 active" aria-current="page" href="create.php">ADD TRIP</a>
        </li>
        <li class="nav-item">
        <div class="d-flex pe-2"> DESTINATIONS<i class="ps-1 fa-solid fa-caret-down "></i></div>
        </li>
        <div class="d-flex pe-2"> TRAVEL TIPS<i class="ps-1 fa-solid fa-caret-down "></i></div>
        <a class="nav-link m-0  p-0 pe-2 active" aria-current="page" href="api.php">API</a>      
      </ul>
      <form class="d-flex">
      <div class="sozialMedia d-flex align-items-center">
        <i class="p-2 fa-brands fa-facebook-f"></i>
        <i class="p-2 fa-brands fa-twitter"></i>
        <i class="p-2 fa-brands fa-instagram"></i>
        <i class="p-2 fa-solid fa-heart" ></i>
        <i class="p-2 fa-brands fa-google-plus-g"></i>
        <i class="p-2 fa-brands fa-telegram"></i>
        <i class="p-2 fa-brands fa-youtube"></i>
        </div>
        <input class="form-control me-2" id="trip" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html> 

