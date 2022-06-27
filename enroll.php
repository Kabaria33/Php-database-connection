<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="zalego";
    $dataconn=mysqli_connect($server,$username,$password,$database);
    if(isset($_POST["button"]))
    {
        $fullname=$_POST["fullname"];
        $phonenumber=$_POST["phonenumber"];
        $gender=$_POST["gender"];
        $course=$_POST["course"];
        $email=$_POST["email"];
        $mydata=mysqli_query($dataconn,"INSERT INTO enrollment(fullname,phonenumber,gender,course,email)VALUES('$fullname','$phonenumber','$gender','$course','$email')");
        if($mydata)
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
    <title>Enroll</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow " style="padding:0px;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a><!--this is for creating the side branding which sends you to home page-->
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false"><!--the target is used to show when you click the button it will open the id you have specified-->
                 <span class="navbar-toggler-icon "></span><!--for the  icon -->
            </button>
            <div class="collapse navbar-collapse" id="navbar"><!--this is the id being refrenced above-->
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="aboutus.php" class="nav-link active">About Us</a>
                    <a href="#"  class="nav-link btn btn-primary  ">Register now</a>
                </div>
            </div>
        </div>
        
<!-- </nav> -->
    <main class="p-5 mb-4 bg-light ">
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <span><i class="fa fa-calendar"></i></span>
        <span>20th July 2022</span><br>
        <span><i class="fa fa-map-marker"></i></span>
        <span>Zalego Academy, Devan Plaza</span>

        
    </main> 
    <form  action="enroll.php" method="POST" class="container shadow-sm shadow-none-t ">
    <p class="paragraph form-text fs-6">Looking for a place to kickstart your career in Technology<br>
                                   Whether you're a local , new in town or just cruising through we've got<br>
                                   loads of great tips and events for you </p>
    <p class="paragraph form-text fs-3 fw-bold">Sign up today?</p>
    <div class="row ">
        <div class="col-lg-6 pb-3 ">
        <label for="message" class="form-label">Full Name :</label>
        <input type="text"name="fullname" class="form-control shadow" placeholder="Enter your full name">
        </div>
        <div class="col-lg-6 pb-3 ">
        <label for="message" class="form-label">Phone Number:</label>
        <input type="text" name="phonenumber" class="form-control shadow" placeholder="+2547......">
        </div>

    </div>
    <div class="row ">
        <div class="col-lg-6 pb-3 ">
        <label for="message" class="form-label">Email Address:</label>
        <input type="email"  name="email" class="form-control shadow" placeholder="Please enter your email">
        </div>
        <div class="col-lg-6 pb-3">
        <label for="message"  class="form-label">What's your gender?</label>
        <select name="gender"class="form-control shadow">
            <option class=>--Select your gender--</option>
            <option value="Male"> Male </option>
            <option value="Female"> Female</option>
        </select>

        </div>
        
    </div>
    <p class="form-text">In order to complete your registration to the bootcamp, you are required to select one course you will be <br> undertaking .Please NOTE that this will be your learning track during the 2-weeks immersion</p>
    <div class="col-7">
        <label for="message" class="form-label">What's your preferred course?</label>
        <select  name="course"class="form-control shadow pb-3">
                <option class=>--Select your course--</option>
                <option value=" Android App Development"> Android App Development</option>
                <option value="Web Design & Development" > Web Design & Development</option>
                <option value="Data Analysis" >Data Analysis</option>
                <option value="Cyber Security">Cyber Security</option>
        </select>
    </div>
    <p class="form-text">You agree by providing your information you understand all our data privacy and protection policy <br>outlined in our Terms & condition and the Privacy Policy statements.</p>
    <input type="checkbox" class="form-check-input" value="" >
    <label  class="pb-3">Agree terms and condition</label><br>
    <button  name="button"class="btn btn-primary">Submit application</button>
    </form>
    <form  action="aboutus.php" method="POST"class="pt-3" >
            <p class=" paragraph form-text fs-6">Subscribe to get information,latest news about <br> Zalego Academy </p>
                <div class="row align-items-center"> 
                    <div class="col-8" >
                        <input type="text" name="email" class="form-control"  placeholder="Your email address">
                    </div>
                    <div class="col-4">
                        <button type="submit" name="subscribe" class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
    </form>
    <hr>
    <footer class="form-text">
        &copy;Company 2022
    </footer>
    




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <!-- <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>