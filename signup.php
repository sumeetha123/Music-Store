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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Lavishly+Yours&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .cont {
            top: 20%;
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
            margin-left: 600px;
            font-family: 'Grape Nuts', cursive;
            font-size: 35px;
            color: #070776;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-red-500">
        <button type="button" class="btn btn-light butt mt-5 px-4 py-2 text-bold"><a href="home.php">Back to home</a></button>
        <i class="fa-solid fa-user-music"></i>
        <h3 class="head">Sign Up &nbsp; to &nbsp; Music Store</h3>
    <div class="container-sm cont rounded px-5 py-5">
        <form>
        <div class="mb-3">
                <label for="name" class="form-label text-xl">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                <div id="emailHelp" class="form-text">Choose name with letters and digits.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-xl">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-xl">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Terms and Conditions</label>
            </div>
            <button type="submit" class="btn btn-primary block" onclick="myFunction()">Submit</button>
        </form>
    </div>


    <script>
        function myFunction() {
        alert("Registered successfully, login to continue!");
        }
    </script>
</body>
</html>