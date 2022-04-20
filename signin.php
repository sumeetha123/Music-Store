<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./font-awesome/js/all.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/ownscript.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lavishly+Yours&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .cont {
            top: 30%;
            /* left: 50%; */
            position: absolute;
            width: 40%;
            margin-left: 480px;
            background-color: white;
        }

        .block {
            margin-left: 220px;
        }

        .butt {
            margin-left: 1300px;
        }

        .head{
            margin-left: 620px;
            font-family: 'Grape Nuts', cursive;
            font-size: 35px;
            color: #070776;
            font-weight: bold;
            margin-top: 40px;
        }

        .new {
            margin-top: 450px;
            margin-left: 480px;
            color: white;
        }

        .new1 {
            margin-top: 450px;
            margin-right: 450px;
            color: white;
        }

        .pass {
            font-family: 'Grape Nuts', cursive;
            color: #070776;
            font-weight: bold;
        }


    </style>
</head>
<body class="bg-red-500">
        <?php
        // define variables and set to empty values
        $password = $email = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);

        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>


        <button type="button" class="btn btn-light butt mt-5 px-4 py-2 text-bold"><a href="home.php">Back to home</a></button>
        <i class="fa-solid fa-user-music"></i>
        <h3 class="head">Sign In &nbsp; to &nbsp; Music Store</h3>
    <div class="container-sm cont rounded px-5 py-5">
        <form>
        <form method="post" action="albums.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-xl">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-xl">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Terms and Conditions</label>
            </div>
            <button type="submit" class="btn btn-primary block"><a href="index.php">Submit</a></button>
        </form>
       
    </div>
    <span class="new hover:text-white" style="float: left;"><a href="signup.php">Are you New here?</a></span>
    <span class="new1" style="float: right;"><a href="javscript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Forgot password</a></span>


   <!-- Forgot Password  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-2xl pass" id="exampleModalLabel">Fogot &nbsp; Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
          
        </form>

      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" id="verify_ajax" onclick="myFunction()">Change Password</button>
      </div>
    </div>
  </div>
</div>






<script>
function myFunction() {
  alert("Password reset done!");
}
</script> 
</body>
</html>