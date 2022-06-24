<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn=mysqli_connect($server,$username,$password,$database);
// if($conn){
//     echo"Database connected successfully";
// }
// else{
//     echo"Error occurred";
// }
if(isset($_POST['submitButton']))
{
    //1.fetch form data
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phonenumber'];
    $message=$_POST['message'];

    //2.submit form data
    $insertData= mysqli_query($conn,"INSERT INTO contactus(firstname,lastname,email,phonenumber,message)VALUES('$firstName','$lastName','$email','$phone','$message')");
    if($insertData)
    {
        echo "Data submitted successfully";
    }
    else
    {
        echo"Error occured";
    }

}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>BootstrapGridLayout</title>
            <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

    </head>
    <body>
        <!-- navigation bar here -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow " style="padding:0px;">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">Zalego Academy</a><!--this is for creating the side branding which sends you to home page-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false"><!--the target is used to show when you click the button it will open the id you have specified-->
                        <span class="navbar-toggler-icon "></span><!--for the  icon -->
                    </button>
                    <div class="collapse navbar-collapse" id="navbar"><!--this is the id being refrenced above-->
                        <div class="navbar-nav">
                            <a href="#" class="nav-link active">Home</a>
                            <a href="aboutus.php" class="nav-link">About Us</a>
                            <a href="enroll.php" class="nav-link">Enroll</a>
                        </div>
                    </div>
                </div>   
        </nav> -->
        <!-- end navigation bar -->

        <main class="p-5 mb-4 bg-light "> 
                <h1>Welcome , Virginia Kabaria.</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero earum vel inventore quibusdam sed, ex ratione harum voluptas! Suscipit qui expedita minima, beatae, pariatur quasi aliquid saepe inventore nulla optio, omnis soluta voluptatibus? Saepe quam iure adipisci, aperiam, ipsa assumenda minima commodi expedita nostrum dolores inventore cumque facere mollitia et?</p>
                <button class="btn btn-primary">learn more</button>

        </main>
        <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h1>Header 1</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui amet aspernatur aliquid deleniti molestiae quas nemo ex tenetur. Vero, totam aperiam. Sint accusantium consectetur culpa impedit beatae pariatur harum ipsum nesciunt aliquam magni odio, asperiores facere. Necessitatibus ipsa totam animi!</p>


                        <button class="btn btn-primary">learn more</button>
                    </div>
                    <div class="col-lg-4">
                        <h1>Header 2</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui amet aspernatur aliquid deleniti molestiae quas nemo ex tenetur. Vero, totam aperiam. Sint accusantium consectetur culpa impedit beatae pariatur harum ipsum nesciunt aliquam magni odio, asperiores facere. Necessitatibus ipsa totam animi!</p>


                        <button class="btn btn-primary">learn more</button>
                    </div>
                    <div class="col-lg-4">
                        <h1>Header 3</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui amet aspernatur aliquid deleniti molestiae quas nemo ex tenetur. Vero, totam aperiam. Sint accusantium consectetur culpa impedit beatae pariatur harum ipsum nesciunt aliquam magni odio, asperiores facere. Necessitatibus ipsa totam animi!</p>


                        <button class="btn btn-primary">learn more</button>
                    </div>
                </div>
                <!-- contact us page here -->
                <div class="row pt-5 ">
                    <h1>Contact Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab officiis amet animi laboriosam quisquam nihil, impedit distinctio itaque. Quos, earum!</p>
                    <form action="index.php" method="POST">
                        <div class="row" >
                            <div class="mb-3  col-lg-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text"  name='firstname'class="form-control" placeholder="Please enter your First Name" required><!--form-control makes the text area to be below the label-->
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" name='lastname'class="form-control " placeholder="Please enter your Last Name" >                   
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" name='phonenumber'class="form-control" placeholder="Please enter your Phone Number" ><!--form-control makes the text area to be below the label-->
                                
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name='email'class="form-control " placeholder="Please enter your  Email" ><!--form-control makes the text area to be below the label-->
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-12">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea cols="30" rows="5" name='message' class="form-control" placeholder="Please enter your message here"></textarea>                        

                            </div>
                        </div>
                        <button type="submit" name="submitButton" class="btn btn-outline-primary mt-3">Send A Message</button>
                    </form >
                </div>
                <!-- End Contact Us Page -->
                
                    <hr>
                    <footer>
                        &copy;Company 2022
                    </footer>
        </div>
                
        </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>-->
        <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    </body>
</html>