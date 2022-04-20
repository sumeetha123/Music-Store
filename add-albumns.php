<?php include 'db_connect.php';

if(isset($POST['submit'])){
  $Albumns_name=$_POST['Albumns_name'];
  $Lists=$_POST['Lists'];
  $No_Of_Songs=$_POST['No_Of_Songs'];
  $date=$_POST['date'];
  $year=$_POST['year'];

  $sql="insert into 'crud' (Albumns_name, Lists, No_Of_Songs, date, year)
  values('$Albumns_name', '$Lists', '$No_Of_Songs', '$date', '$year')";
  $result=mysqli_query($conn,$sql);
  if($result){
      echo "Data is inserted successfully";
  }else {
    die("Database Connection Failed. Error: ".$conn->error);
  }

}


?>



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

    
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Albumn_Names</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Albumn's name" name="Albumns_name">
            </div>
          
            <div class="mb-3">
                <label class="form-label">Lists</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Lists" name="Lists">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Number of songs</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Number of songs" name="No_Of_Songs">
            </div>

            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="date">
            </div>

            <div class="mb-3">
                <label class="form-label">Year</label>
                <input type="year" class="form-control" id="exampleInputEmail1" placeholder="Enter year" name="year">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>


</html>