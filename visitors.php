<?php

session_start();


// Your adminhome.php content here


$host = "localhost";
$user = "root";
$password = "";
$db = "misbahproject"; 

$data = mysqli_connect($host, $user, $password, $db);
$sql= "SELECT * FROM visitors";
//SQL query to show the visitors

$result= mysqli_query($data,$sql);

?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misbah Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Misbah Tourist</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visitors.php">Our Visitors</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





<div class="content">
    <center>
    <h1>Our Visitors : </h1>


    <br></br>


    <table border="1px">
        <tr>
            <th style="padding:20px; font-size:15px;" >Username</th>
            <th style="padding:20px; font-size:15px;">Email</th>
            <th style="padding:20px; font-size:15px;">Phone</th>
            
            
        </tr>

        <?php

while($info=$result->fetch_assoc())
{





?>
        <tr border="1px">
        <td style="padding:20px;">
            <?php echo "{$info['username']}"; ?>
            
        </td>
        <td style="padding:20px;">
            <?php echo "{$info['email']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['mobile']}"; ?>
            
        </td>

 
        </tr>
        <?php
    }
    ?>

    </table>
    </center>
</div>

</section>















<footer style="margin-top:100px">
    <p class="py-3 bg-dark text-white text-center">All Copyrights reserved for @MisbshTourists</p>
</footer>














<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>




















