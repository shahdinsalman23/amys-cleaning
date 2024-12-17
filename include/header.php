<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>

    <!-- Header Top Section Start -->
    <section class="header-top wow bounceInLeft" style="animation-duration: 1.5s;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="clean-home">
                                <p>Clean Home & Professional Services</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="header-social-icons">
                                <ul>
                                    <li><a href=""><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href=""><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href=""><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href=""><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href=""><i class='bx bx-envelope'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="get-book">
                        <a href="contact.php">
                            <p>Contact Us</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Top Section End-->

    <!-- Header Main Section Start -->
    <header class="header-main wow bounceInDown center" style="animation-duration: 1.5s;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="header-estimate">
                        <img src="images/comment.png" alt="">
                        <div class="estimate-now">
                            <p>Want a free estimate now?</p>
                            <h6>704 780 8579</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-3">
                    <div class="header-nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="service.php">Services</a></li>
                            <li><a href="area.php">Areas</a></li>
                            <li><a href="blog.php">Blogs</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-icon">
                        <span onclick="openNav()">&#9776;</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Main Section End-->


    <!-- Sidebar Menu Section Start -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <!-- Sidebar Menu Section End -->