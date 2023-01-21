<?php
$servername = "projectidea";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $subject= $_POST['subject'];
// $message= $_POST['message'];

// $email_from = 'info@projectdecider.com';
// $email_subject = 'New Form Submission';
// $email_body = "User Name: $name.\n".
//                 "User Email: $visitor_email.\n".
//                  "SUbject: $subject.\n".
//                  "User Message: $message .\n";

// $to = 'gp1a19@pdm.ac.in';
// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";

// mail($to,$email_subject,$email_body,$headers);

// header("Location: contact.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Decider</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="subheader">
        <nav>
            <a href="index.html"><img src="logo1.jpeg" alt="error"></a>
            <div class="navlinks" id="navlinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="project.html">PROJECTS</a></li>
                    <li><a href="contact.html">CONTACT-US</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Contact Us</h1>
    
    </section>

    <!-- Contact us page -->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14000.30513220025!2d76.88102413169332!3d28.687364618337188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0b8bdd0d4dbd%3A0x676590a4f8ccce18!2sPDM%20University!5e0!3m2!1sen!2sin!4v1636354239304!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </section>
    
    <section class="contactus">
        <div class="row">
            <div class="contactcol">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Delhi-NCR, Haryana</h5>
                        <p>Bahadurgarh, Haryana, INDIA</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+91 0123456789</h5>
                        <p>Monday to Friday, 10AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>info@pdm.ac.in</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contactcol">
                <form action="backend.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea name="message" id="" cols="15" rows="8" placeholder="Message" required></textarea>
                    <button type="submit" class="herobtn redbtn">Send Message</button>
                </form>
            </div>
        </div>
    </section>



    <!-- footer -->
    <section class="footer">
        <div class="icons">
            <a href="facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="twitter.com"><i class="fa fa-twitter"></i></a> 
            <a href="instagram.com"><i class="fa fa-instagram"></i></a>
            <a href="linkedin.com"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="outerfooter">
            Copyright &copy; Project Decider. All Rights Reserved
        </div>
        <!-- <p>Made With <i class="fa fa-heart-o"> by Gaurav Prajapat</i></p> -->
    </section>
    <!-- javascript for toggle menu -->
    <script>

        var navlinks = document.getElementById("navlinks");
        function showMenu(){
            navlinks.style.right = "0";
        }
        function hideMenu(){
            navlinks.style.right = "-200px";
        }
    </script>
</body>

</html>






