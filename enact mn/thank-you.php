<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "o@enact.co";
    $email_subject = "New Inquiry From Contact Form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Your name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Tell us about your project: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- include your own success html here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Work For Us ― Enact</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link href="//unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/htu5vqr.css">
    <link rel="stylesheet" href="css/application-u4hqhy273v9aqebnz0gxci8cncor8w.min.css">
    <link rel="shortcut icon" href="/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="reveal">
        <nav> <a class="nav-brand above-overlay nav-padding" href="/">
                <div class="logo"></div>
            </a>
            <div class="menu-burger above-overlay">
                <div class="bar"></div>
            </div>
        </nav>
        <div class="overlay">
            <div class="menu-content">
                <div class="menu-padding">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="menu-options-list">
                                <li class="menu-option option-3"><a href="/projects">Projects</a></li>
                                <li class="menu-option option-2"><a href="/about">About</a></li>
                                <li class="menu-option option-4"><a href="/services" class="services">News</a> <sup>Coming Soon</sup></li>
                                <li class="menu-option option-5"><a href="/careers">Careers</a></li>
                                <li class="menu-option option-5"><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <section class="about-hero">
                <div class="container">
                    <div class="row reveal">
                        <div class="col-sm-12">
                            <h1>Thank you</h1>
                        </div>
                    </div>
                    <p>Thank you for contacting us. We will contact you within two business days in regards to your inquiry.</p>
                </div> <br style="margin:50px 0;"><small style="color:#6c757d">As a thank you, here's a picture of a really cute dog
                </small> <br /><img src="/img/dog.jpeg" width="500px" style="margin-top:15px">
            </section>
        </div>
        <footer class="footer reveal">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-logo"></div>
                    </div>
                    <div class="col-sm-3">
                        <ul class="list-unstyled text-small">
                            <li><a href="/projects">Projects</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/careers">Careers</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul class="list-unstyled text-small">
                            <li><a href="//dribbble.com/enact">Dribbble</a></li>
                            <li><a href="//instagram.com/enactmedia">Instagram</a></li>
                            <li><a href="//twitter.com/enactco">Twitter</a></li>
                            <li>
                            <li><a href="//linkedin.com/company/enactco">Facebook</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <ul class="list-unstyled text-small">
                            <li>33 Arch St, #Suite 432</li>
                            <li>Boston, MA 02110</li>
                            <li>United States of America</li><br />
                            <li><a href="mailto:hello@enact.co">hello@enact.co</a></li>
                            <li>603.312.1647</li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">Copyright &copy; 2018 Enact, LLC. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122171071-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-122171071-1');

    </script>
    <script src='//code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="js/application-knzx1c4x9psujxoylpwa3onw5htggb.min.js"></script>
</body>

</html>

<?php
 
}
?>
