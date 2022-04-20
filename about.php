 <!-- <?php 
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aboutus Page</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lavishly+Yours&display=swap" rel="stylesheet">
    <style>
        .head {
            margin-top: 40px;
            margin-bottom: 40px;
            
        }

        .body {
            padding-left: 20px;
            padding-bottom: 30px;
            padding-top: 30px;
            padding-right: 10px;
        }

        .butt {
            /* margin-left: 500px; */
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .cont {
            margin-left: 300px;
            margin-bottom: 10px;
            margin-right: 300px;
            
        }

        .sub {
            margin-left: 400px;
            margin-top: 10px;
            margin-bottom: 60px;
        }
    </style>

</head>

<body>

<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="logo_bts.jpg" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img src="logo_bts.jpg" class="d-block " alt="...">
    </div>
    <div class="carousel-item">
      <img src="logo_bts.jpg" class="d-block " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

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
          <a class="nav-link active text-white" aria-current="page" href="./contact.php">Contactus page</a>
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
            <a class="nav-link active text-white pl-4" aria-current="page" href="./signin.php">Logout </a>
        </li>
    </ul>
  </div>
</nav>


<div>
        <h1 style="padding-left: 550px; font-size: 70px; padding-top: 70px; padding-bottom:30px; color: rgb(7, 7, 95); font-family: 'Grape Nuts', cursive;">About us page!</h1>
    </div>

    <!--jumbotron-->

    <div class="container-lg head bg-danger">
        
        <div class="jumbotron bg-light body">
            <h2 class="text-danger">Welcome to Music store!</h2>
            <p class="load">This is a simple music store, it is easy to use</p>
            <hr class="my-4">
            <p class="text-danger">Music Player Online is a free online app which allows you to listen to music online from your Google Drive. You don't need to download music to your computer before you can listen to music.  It's feautures include
            </p>
            <li class="text-danger">Play music!</li>
            <li class="text-danger">Add music!</li>
            <li class="text-danger">Delete music!</li>
            <li class="text-danger">Stop music!</li>
            <li class="text-danger">Volume adjustment and many more</li>
            <a class="btn btn-primary btn-md butt" href="home.php" role="button">Home</a>
        </div>
    </div>
 
           
</body>

</html>