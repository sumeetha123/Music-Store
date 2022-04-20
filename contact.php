<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lavishly+Yours&display=swap" rel="stylesheet">
    <style>
           .cont {
            margin-left: 300px;
            margin-bottom: 10px;
            margin-right: 300px;
            margin-top: 60px;
            
        }

        .sub {
            margin-left: 400px;
            margin-top: 10px;
            margin-bottom: 60px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Music store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="./home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="./about.php">Aboutus page</a>
        </li>


       
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="albumns.php">Albumns</a></li>
            <li><a class="dropdown-item" href="#">Singers</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="about.php">About</a></li>
          </ul>
        </li> -->
        
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-white border-white" type="submit">Search</button>
      </form>
       -->
      
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="./index.php">Back</a>
        </li>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
            <a class="nav-link active text-white pl-4" aria-current="page" href="./home.php">Logout </a>
        </li>
    </ul>
  </div>
</nav>


<div>
        <h1 style="padding-left: 500px; font-size: 70px; padding-top: 30px; padding-bottom:30px; color: rgb(7, 7, 95); font-family: 'Grape Nuts', cursive;">Contact us page!</h1>
    </div>

<form class="cont" action="mail.php" method="post">
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" name="firstname">
          
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" name="lastname" >
          
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control bg-danger text-white" id="exampleInputEmail1" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Message</label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" name="message" >
                   
                </div>
               
               
                <button type="submit" class="btn btn-primary sub">Submit</button>
            </form>
</body>
</html>