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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/first.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section id="about" class="my-5">
    <div class="py-5">
       <h2 class="text-center">About us</h2>
   </div>


   <div class="container-fluid">
   <div class="row">
   <div class="col-lg-6 col-md-6 col-12">
    <img src="images/cc3.jpg" class="image-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12 content1">
       <h2 class="display -4">This is Misbah Tourist.</h2>
       <p class="py-3 secondparagraph">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas illum tempora molestias dolores unde! Reiciendis id eaque sequi blanditiis culpa minus veritatis facere a officia eos, cumque ad dicta assumenda.
        <br>
        <a href="about.php" class="btn btn-success"> check more </a>

       </p>
      </div>
      </div>
      </div>
</section>

<section id="services" class="my-5">
      <div class="py-5">
         <h2 class="text-center"> our services</h2>
     </div>

     <div class="container-fluid services">
       <div class="row">
           
            <div class="col-lg-4 col-md-4 col-12">
               <div class="card">
                 <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">Beautiful nature:</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      <a href="#" class="btn btn-success">See Profile</a>
                      </div>
                </div>
            </div>
            

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Beautiful nature:</h4>
                       <p class="card-text">Some example text.</p>
                     <a href="#" class="btn btn-success">See Profile</a>
                   </div>
                 </div>
             </div>

             <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Beautiful nature:</h4>
                       <p class="card-text">Some example text.</p>
                     <a href="#" class="btn btn-success">See Profile</a>
                   </div>
                 </div>
             </div>
            </div> 
            </div>
</section>

<section class="my-5">
            <div class="py-5">
               <h2 class="text-center"> California</h2>
           </div>

           <div class="container-fluid">
             <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/ccl.jpg" class="img-fluid pb-3">
                </div>
            

              </div>
             <center> <button class="btn btn-success btnc" ><a href="application.php"> Apply to Visit </a></button></center>
            </div>
</section>

<section id="contact" class="my-5">
            <div class="py-5">
               <h2 class="text-center"> Contact Us</h2>
           </div>

           <div class=" w-50 m-auto">
            <form action="userinfo.php" method="post">
            <div class="form-group">
                <label for="">Username :</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="">E-mail :</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone No :</label>
                <input type="text" name="mobile" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Comment :</label>
                <textarea class="form-control" name="comment" id=""></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
           </div>

           </form>

           

</section>

<footer>
    <p class="py-3 bg-dark text-white text-center">All Copyrights reserved for @MisbshTourists</p>
</footer>



    






















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>