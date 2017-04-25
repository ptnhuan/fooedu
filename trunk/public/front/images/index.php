<!DOCTYPE html>
<html>
    <head>
        <title>Footer</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?> 

        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head> 
    <body> 
        <div class="homepage">
            <!--menu-->
            <div class="ie-module-2">
                <div class="navbar navbar-default ie-fix-bottom" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <hr class="ie-tophr">
                    <div class="top-strip">
                        <div class="container">
                            <div class="account">
                                <ul>
                                    <li><a href="#">Subscribe</a></li>
                                    <li><a href="#">Sign Out</a></li>
                                    <li>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                                My Account
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                                <li><a href="#">Profile</a></li>
                                                <li><a href="#">Account Setting</a></li>
                                                <li><a href="#">Privacy Setting</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr class="ie-fix-border" >
                    </div>

                    <div class="ie-nav">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-sm-fix">
                                    <div class="logo ">
                                        <a href="#">
                                            <img src="images/logo.png"  >
                                        </a>
                                    </div>
                                    <div class="navbar-header ">

                                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-8 col-sm-12">
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <nav class="nav-fix">
                                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                                            <div class="row">
                                                <ul>
                                                    <li class="dropdown ie-li" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <p>Home</p> <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ie-li" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <p class="center-block"> Blog</p> <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ie-li" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <p class="center-block">Services</p> </a>
                                                    </li>
                                                    <li class="dropdown ie-li" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <p class="center-block"> Events</p> <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ie-li" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <p class="center-block">Courses</p> <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ie-li" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <p class="center-block"> Pages</p> <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li><a href="#">Separated link</a></li>
                                                            <li><a href="#">One more separated link</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ie-li" >
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <p class="center-block">Contact Us</p></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end menu-->

            <!--slide show-->
            <div class="ie-module-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/banner1.jpg">
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <img src="images/banner2.jpg">
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <img src="images/banner3.jpg">
                        </div>
                        <!-- End Item -->
                        <div class="item">
                            <img src="images/banner4.jpg">
                        </div>
                        <!-- End Item -->
                    </div>
                    <!-- End Carousel Inner -->
                    <div class="nav nav-pills nav-justified ie-padding" >
                        <div data-target="#myCarousel" data-slide-to="0" class=" active"><a href="#">-</a></div>
                        <div data-target="#myCarousel" data-slide-to="1"><a href="#">-</a></div>
                        <div data-target="#myCarousel" data-slide-to="2"><a href="#">-</a></div>
                        <div data-target="#myCarousel" data-slide-to="3"><a href="#">-</a></div>
                    </div>

                </div>
                <div class="newsletters">
                    <h1>Start 30-Day free trial today.</h1>
                    <h4>Search for online courses on Web development, Yoga, Guitar lessons, or anything else.</h4>
                    <div class="subscribe">
                        <input type="text" class="input-block-level ie-text">
                        <input type="button" class="ie-btn" value="Subscribe">
                    </div>
                </div>
            </div>
            <!--end slide show-->

            <!--ours services-->
            <div class="ie-module-1">
                <div class="contant"> 
                    <section>
                        <div class="container">
                            <div class="sec-header">
                                <h3>Our Services</h3>
                                <p>Take a look at what we have are doing</p>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="row">

                                <div class="span4">
                                    <div class="services">
                                        <div class="header">
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-user inner-icon"></i>
                                        </div>
                                        <div class="text">
                                            <h3><a href="#">Expert teachers</a></h3>
                                            <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="span4">
                                    <div class="services">
                                        <div class="header">
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-list-alt inner-icon"></i>
                                        </div>
                                        <div class="text">
                                            <h3><a href="#">Trusted certifications</a></h3>
                                            <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="span4">
                                    <div class="services">
                                        <div class="header">
                                            <i class="fa fa-tablet"></i>
                                            <i class="fa fa-cogs inner-icon"></i>
                                        </div>
                                        <div class="text">
                                            <h3><a href="#">Start Learning</a></h3>
                                            <p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section> 
                </div>


            </div>
            <!--end ours services-->

            <!--Latest Courses-->
            <div class="ie-module-11">

                <div class="contant"> 
                    <section class="gray-bg">
                        <div class="container">

                            <div class="sec-header">
                                <h2>Latest Courses</h2>
                                <p>Check Our Featured Courses</p>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="customNavigation">
                                <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                                <a class="btn next"><i class="fa fa-angle-right"></i></a>
                            </div>

                            <div id="zaro-carousel" class="zaro-carousel" style="display: block; opacity: 1;">
                                <div class="zaro-wrapper-outer">
                                    <div class="zaro-wrapper" style="width: 7032px; left: 0px; display: block;">
                                        <div class="zaro-item" style="width: 293px;">
                                            <div class="course ">
                                                <div class="thumb">
                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                    <div class="price"><span>$</span>9</div>
                                                </div>
                                                <div class="text">
                                                    <div class="header">
                                                        <h4>Management</h4>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-name">
                                                        <p>Build a Business Plan</p>
                                                        <span>$800</span>
                                                    </div>
                                                    <div class="course-detail-btn">
                                                        <a href="#">Subscribe</a>
                                                        <a href="#">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="zaro-item" style="width: 293px;">
                                            <div class="course">
                                                <div class="thumb">
                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                    <div class="price"><span>$</span>9</div>
                                                </div>
                                                <div class="text">
                                                    <div class="header">
                                                        <h4>Management</h4>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-name">
                                                        <p>Build a Business Plan</p>
                                                        <span>$800</span>
                                                    </div>
                                                    <div class="course-detail-btn">
                                                        <a href="#">Subscribe</a>
                                                        <a href="#">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="zaro-item" style="width: 293px;">
                                            <div class="course">
                                                <div class="thumb">
                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                    <div class="price"><span>$</span>9</div>
                                                </div>
                                                <div class="text">
                                                    <div class="header">
                                                        <h4>Management</h4>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-name">
                                                        <p>Build a Business Plan</p>
                                                        <span>$800</span>
                                                    </div>
                                                    <div class="course-detail-btn">
                                                        <a href="#">Subscribe</a>
                                                        <a href="#">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="zaro-item" style="width: 293px;">
                                            <div class="course">
                                                <div class="thumb">
                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                    <div class="price"><span>$</span>9</div>
                                                </div>
                                                <div class="text">
                                                    <div class="header">
                                                        <h4>Management</h4>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-name">
                                                        <p>Build a Business Plan</p>
                                                        <span>$800</span>
                                                    </div>
                                                    <div class="course-detail-btn">
                                                        <a href="#">Subscribe</a>
                                                        <a href="#">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="zaro-item" style="width: 293px;">
                                            <div class="course">
                                                <div class="thumb">
                                                    <a href="#"><img src="images/course1.jpg" alt=""></a>
                                                    <div class="price"><span>$</span>9</div>
                                                </div>
                                                <div class="text">
                                                    <div class="header">
                                                        <h4>Management</h4>
                                                        <div class="rating">
                                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-name">
                                                        <p>Build a Business Plan</p>
                                                        <span>$800</span>
                                                    </div>
                                                    <div class="course-detail-btn">
                                                        <a href="#">Subscribe</a>
                                                        <a href="#">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="zaro-controls clickable">
                                    <div class="zaro-pagination">
                                        <div class="zaro-page active"><span class=""></span></div>
                                        <div class="zaro-page"><span class=""></span></div>
                                        <div class="zaro-page"><span class=""></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--end Latest Courses-->

            <!--student form-->
            <div class="ie-module-10">  
                <div class="form">
                    <div class="form-contant relative">
                        <div class="container form-fields">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="span6">
                                        <img src="images/student.png">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="span6">
                                        <div class="student-form">
                                            <div class="header">
                                                <h2>Student Form</h2>
                                                <p>Learn how to build websites &amp; apps, write code or start a business.</p>
                                            </div>
                                            <div class="form-data">
                                                <ul>
                                                    <div class="input">
                                                        <li><input type="text" placeholder="Name"></li>
                                                        <li><input type="text" placeholder="Email ID"></li>
                                                        <li><input type="text" placeholder="Phone Number"></li>
                                                        <li><input type="text" placeholder="Select Course"></li>
                                                    </div>
                                                    <li>
                                                        <div class="gender">
                                                            <span>
                                                                <input name="gender" type="radio" value="" id="male">
                                                                <label for="male">Male</label>
                                                            </span>
                                                            <span>
                                                                <input name="gender" type="radio" value="" id="female">
                                                                <label for="female">Female</label>
                                                            </span>
                                                        </div>
                                                        <button>Submit</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bg1" class="skrollable"></div>
                        <div id="bg2" class="skrollable"></div>
                        <div id="bg3" class="skrollable"></div>
                    </div>
                </div>
            </div>
            <!--end student form-->

            <!--Courses Topic-->


            <!--end Courses Topic-->

            <!--Our Teachers-->
            <div class="our-teachers">
                <div class="contant">
                    <section class="gray-bg">
                        <div class="container">
                            <div class="sec-header">
                                <h3><strong>Our Teachers</strong></h3>
                                <p>Discover courses by topic</p>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3  col-sm-3 col-xs-12  ">
                                        <div class="teachers">
                                            <div class="social-icons">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-flickr"></i></a>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                            </div>
                                            <div class="thumb">
                                                <a href="#"><img src="images/teachers4.jpg" class="img-responsive" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Mickey Rorey</a></h2>
                                                <p>Science Teacher</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12  ">
                                        <div class="teachers">
                                            <div class="social-icons">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-flickr"></i></a>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                            </div>
                                            <div class="thumb">
                                                <a href="#"><img src="images/teachers4.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Mickey Rorey</a></h2>
                                                <p>Science Teacher</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-12  ">
                                        <div class="teachers">
                                            <div class="social-icons">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-flickr"></i></a>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                            </div>
                                            <div class="thumb">
                                                <a href="#"><img src="images/teachers4.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Mickey Rorey</a></h2>
                                                <p>Science Teacher</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3  col-sm-3 col-xs-12  ">
                                        <div class="teachers">
                                            <div class="social-icons">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-flickr"></i></a>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                            </div>
                                            <div class="thumb">
                                                <a href="#"><img src="images/teachers4.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <h2><a href="#">Mickey Rorey</a></h2>
                                                <p>Science Teacher</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!--end Our Teachers-->

            <!--popular posts-->
            <div class="ie-module-8">
                <div class="row">
                    <div class="ie-pg">
                        <div class="container post-contant">
                            <div class="sec-header">
                                <h2>Popular Posts</h2>
                                <p>Latest From Blog</p>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="post">
                                            <div class="thumb">
                                                <img src="images/post.png" alt="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>

                                            <div class="header">

                                                <div class="post-date">
                                                    <p>May<span>11</span>2014</p>
                                                </div>

                                                <div class="icons">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a><span class="notification">25</span></li>
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text">
                                                <h2>A Post With Everything In It</h2>
                                                <h5>Writer David / Poetry course</h5>
                                                <p>Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. </p>
                                                <a href="#" class="more">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="post">
                                            <div class="thumb">
                                                <img src="images/post.png" alt="">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>

                                            <div class="header">

                                                <div class="post-date">
                                                    <p>May<span>11</span>2014</p>
                                                </div>

                                                <div class="icons">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a><span class="notification">25</span></li>
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-comments-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="text">
                                                <h2>A Post With Everything In It</h2>
                                                <h5>Writer David / Poetry course</h5>
                                                <p>Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. Vel ut quas utroque placerat, kasd utinam epicuri at est, hendrerit argumentum dissentias ei nec. </p>
                                                <a href="#" class="more">Read More</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end popular posts-->
        </div>
    </body>
</html>