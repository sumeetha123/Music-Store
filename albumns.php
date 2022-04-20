


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
        .length {
            width: 25vw;
        }

        .nav {
            background-color: white;
        }

        .breadcrumb-item+.breadcrumb-item::before{
            color: black;
        }

        .back {
            background-color: #000000b0;
        }

        .head {
            margin-top: 80px;
            margin-bottom: 40px;
            
        }

        .butt {
            /* margin-left: 500px; */
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .body {
            padding-left: 20px;
            padding-bottom: 30px;
            padding-top: 30px;
            padding-right: 10px;
        }
    </style>
</head>
<?php


// session_start();
// if(isset($_COOKIE['login_msg']))
// {
//     echo '<script type="text/javascript">
//           setTimeout(function(){
//             Swal.fire("Hi! '.$_SESSION['user'].'","welcome to echo","success");
//           },(100)';
//           </script>';
// }
// else {
//     echo " ";
// }

 ?>


<!-- grabbing usser data
<?php
// $sql_user_data = mysqli_query($icon,"SELECT * FROM users WHERE name='".$_SESSION['user']."'");
// $final_result = mysqli_fetch_assoc($sql_user_data);

?> -->



<nav class="navbar navbar-expand-lg navbar-light bg-danger mr-5 ml-5 ">
  <div class="container">
    <a class="navbar-brand text-white" href="#">Music Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="./home.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Browse
          </a>
          <ul class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./about.php">About</a></li>
            <li><a class="dropdown-item" href="./contact.php">Contact</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">All Albumns</a></li>
            
          </ul>
        </li>
        
      </ul>
      
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="./signin.php">Logout</a>
            </li>
      </ul>
  </div>
</nav>



<!--jumbotron-->

<div class="container-lg head bg-danger">
        
        <div class="jumbotron bg-light body">
            <h2 class="text-danger">Welcome to Albumns Page!</h2>
            <p class="load">This is a simple music store, it is easy to use</p>
            <hr class="my-4">
            <p class="text-danger">This is a simple albumns page where it has albumns related to old and new categories, Music Player Online is a free online app which allows you to listen to music online from your Google Drive. You don't need to download music to your computer before you can listen to music. 
            </p>
            <a class="btn btn-primary btn-md butt" href="home.php" role="button">Home</a>
        </div>
    </div>
 

<!-- <div class="container mt-4">
    <div class="row">
        <div class="col-sm-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Albums</li>
                <li class="breadcrumb-item active" aria-current="page">0</li>  
          </ol>
            </nav>
        </div>
        <div class="col-sm-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Albums</li>
                <li class="breadcrumb-item active" aria-current="page">0</li>  

            </ol>
            </nav>
        </div>
        <div class="col-sm-4">
        <nav aria-label="breadcrumb mt-10 ">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Albumns</li>
                <li class="breadcrumb-item active" aria-current="page">0</li>  

            </ol>
            </nav>
        </div>
    </div>
</div> -->

<!--all albums -->
<div class="container mt-5">
    <h3 style="font-family: 'Grape Nuts', cursive; font-size: 50px;" class="text-danger">New albumns</h3>
    <div class="row">


    <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/alb 14.jpg">
                    <div class="card-img-overlay text-white  flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>Let Somebody Go</i></h4>
                        <h4><i>Coldplay and Selena</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black">view</a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div>
        </div> 
        


        <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/alb - 1.jpg">
                    <div class="card-img-overlay text-white flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>Radhe Shyam</i></h4>
                        <h4><i>S.Thaman</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black"><i class="fa-duotone fa-eye">/0</i></a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div>
        </div>
        


        <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/alb 4.jpg_large">
                    <div class="card-img-overlay text-white   flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>RRR</i></h4>
                        <h4><i>M.M. Keeravani</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black">view</a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div>
        </div> 
        <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/alb 13.jpg">
                    <div class="card-img-overlay text-white  flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>Atrangi re</i></h4>
                        <h4><i>A. R. Rahman</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black">view</a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div> 
        </div> 
        
    </div>
</div>


<!--Regular albums -->
<div class="container mt-5">
    <h3 style="font-family: 'Grape Nuts', cursive; font-size: 50px;" class="text-danger">Regular albumns</h3>
    <div class="row">
        <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/old1.jpg">
                    <div class="card-img-overlay text-white flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>Familia</i></h4>
                        <h4><i>Camila Cabello</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black"><i class="fa-duotone fa-eye">/0</i></a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div>
        </div>
         <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/old2.webp">
                    <div class="card-img-overlay text-white  flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>My Universe</i></h4>
                        <h4><i>BTS and Coldplay</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black">view</a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div>
        </div> 
        <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/old3.jpg">
                    <div class="card-img-overlay text-white  flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>Stay</i></h4>
                        <h4><i>Justin and Kid Laroi</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black">view</a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div>
        </div> 
        <div class="col-sm-3 mb-3">
            <div class="card">
                    <img class="card-img" src="images/old5.jpeg">
                    <div class="card-img-overlay text-white  flex-coloumn justify-center back">
                        <h4 class="mt-5"><i>Echo</i></h4>
                        <h4><i>Arman, Eric Nam and KSHMR</i></h4>
                        <div class="link d-flex">
                            <a href="" class="card-link text-black">view</a>
                            <a href="" class="card-link text-black">view songs</a>
                            <a href="" class="card-link text-black">view</a>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div> 






<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/styles.js"></script>

</body>
</html>