<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,intial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap3.css">
        <link rel="stylesheet" href="css/bootstrap3.min.css">
        <link rel="stylesheet" href="css/bootstrap4.css">
        <link rel="stylesheet" href="css/bootstrap4.min.css">
        <link rel="stylesheet" href="font5/css/fontawesome.css">
        <link rel="stylesheet" href="font5/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/i_c.css">
        <script src="js/bootstrap3.js"></script>
        <script src="js/bootstrap3.min.js"></script>
        <script src="js/bootstrap4.js"></script>
        <script src="js/bootstrap4.min.js"></script>
        <script src="font5/js/fontawesome.js"></script>
        <script src="font5/js/fontawesome.min.js"></script>
        <script src="https://kit.fontawesome.com/c0abcc6d73.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-image: url(images/img5.jpg);">
        <header>
            <a href="index.html" class="logo">kryptisch</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="index.php" class="">Home</a></li>
                    <li><a href="about.php" class="">About</a></li>
                    <li><a href="service.php" class="">Service</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <script
            src="http://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('.menu-toggle').toggleClass('active')
                $('nav').toggleClass('active')
            })
        })
        </script>
        <div class="intro text-center">
You like my work. If you have any questions or cooperation offer, i am waiting for a message!
        </div>
        <div class="container bg">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mb-5">
                        <div class="card-title">
                            <h2 class="text-center py-2">Contact  us  </h2>
                            <hr>
                             <?php
                                $message="";
                                if(isset($_GET['error']))
                                {
                                    $message = " Please fill all the blanks *";
                                    echo '<div class="alert alert-danger form-control form-control-lg">'.$message.'</div>';
                                }
                                if(isset($_GET['sucess']))
                                {
                                    $message = "Message has been sent!!...Our staff will respond in 24hrs";
                                    echo '<div class="alert alert-success form-control form-control-lg">'.$message.'</div>';
                                }
                            ?> 
                        </div>
                        <div class="card_ body">
                            <form action="process.php" method="post">
                                <div class="form-group">
                                    <label for="un" class="form-control-lg" required>Name</label>
                                    <input type="text" name="username" placeholder="Name" id="un" class="form-control form-control-lg mb-5">
                                </div>
                                <div class="form-group">
                                    <label for="mail" class="form-control-lg">Email</label>
                                    <input type="email" name="email" placeholder="Email" id="mail" class="form-control form-control-lg mb-5">
                                </div>
                                <div class="form-group">
                                    <label for="sub" class="form-control-lg">Subject</label>
                                    <input type="text" name="subject" placeholder="Subject" id="sub" class="form-control form-control-lg mb-5">
                                </div>
                                <div class="form-group">
                                    <label for="msg" class="form-control-lg">Enter the Message</label>
                                    <textarea name="message" placeholder="Message" id="msg" class="form-control form-control-lg mb-5"></textarea>
                                </div>
                                    <button class="btn btn-success form-control-lg mb-5" name="btn-send"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>
        </html>