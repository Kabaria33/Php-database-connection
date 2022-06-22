<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn=mysqli_connect($server, $username,$password,$database);
// if($conn){
//     echo "database succesfully connected";
// }
// else
// {
//     echo "connection unsuccessful";
// }
if(isset($_POST["subscribe"]))
{
   $email=$_POST["email"];
$Data=mysqli_query($conn,"INSERT INTO subscribers(email)VALUES('$email')");
if($Data)
{
    echo "Data submitted successfully";
}
else
{
    echo "Data not submitted";
}



}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us </title>
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow " style="padding:0px;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a><!--this is for creating the side branding which sends you to home page-->
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false"><!--the target is used to show when you click the button it will open the id you have specified-->
                <span class="navbar-toggler-icon "></span><!--for the  icon -->
            </button>
            <div class="collapse navbar-collapse" id="navbar"><!--this is the id being refrenced above-->
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>
                </div>
            </div>
        </div>
        
    </nav> 
     <main class="p-5 mb-4 bg-light ">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, saepe alias perferendis eaque vitae consequatur?</p>
    </main> 
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our Program </h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur officia velit fugit, ipsum magni similique eum sint minima officiis ex.</p>
            </div>
            <div class="col-lg-6">
                <img src="images/laptop.avif" alt="laptop image" style="width:500px; height:300px; border-radius:20px;">
            </div>
        </div>
        <div class="row container">
            <h1 class="mt-3">The Programs</h1>
            <br>
            <div class="card col-lg-4 shadow m-5" style="border-radius:10px" >
                <h5 class="card-title">Skill Discovery</h5><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, magni?</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class=" card col-lg-4 shadow m-5 " style="border-radius:10px">
                <h5 class="card-title">Upskilling Program</h5><br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, quam!</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class="card col-lg-4 shadow m-5" style="border-radius:10px">
                    <h5 class="card-title">Path finding Program</h5><br>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, in.</p>
                    <button class="btn btn-primary">View Details</button>
            </div>
        </div>
        <div class="row " >
            <p class=" paragraph form-text">Subscribe to get information,latest news about <br> Zalego Academy </p>
            <form action="aboutus.php" method="POST">
                <div class="row align-items-center"> 
                    <div class="col-8" >
                        <input type="text" name="email" class="form-control"  placeholder="Your email address">
                    </div>
                    <div class="col-4">
                        <button type="submit" name="subscribe" class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <hr>
    <footer class="form-text">
        &copy;Company 2022
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <!-- <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>