<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/> 
    </head> 

    <body> 
        <div class="zaro">
            <div class="course-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="banner">  
                                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="active item">
                                            <img src="images/course-detail1.png" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/course-detail2.png" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/course-detail3.png" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/course-detail4.png" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/course-detail1.png" class="img-responsive">
                                        </div>
                                        <div class="item">
                                            <img src="images/course-detail2.png" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div  class="carousel-small" id="bx_pager">
                                <div class="col-md-12 col-sm-2 col-xs-2 padding-none">
                                    <a data-slide-index="0"  data-target="#carousel" data-slide-to="0" class="active">
                                        <img src="images/course-detail1.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-2 col-xs-2 padding-none">
                                    <a data-slide-index="1" data-target="#carousel" data-slide-to="1">
                                        <img src="images/course-detail2.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-2 col-xs-2 padding-none">
                                    <a data-slide-index="2" data-target="#carousel" data-slide-to="2">
                                        <img src="images/course-detail3.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-2 col-xs-2 padding-none"> 
                                    <a data-slide-index="3" data-target="#carousel" data-slide-to="3">
                                        <img src="images/course-detail4.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-2 col-xs-2 padding-none">
                                    <a data-slide-index="4" data-target="#carousel" data-slide-to="4">
                                        <img src="images/course-detail1.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-2 col-xs-2 padding-none">
                                    <a data-slide-index="5" data-target="#carousel" data-slide-to="5">
                                        <img src="images/course-detail2.png" alt="">
                                    </a>
                                </div>  
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="text">
                                <h2>Creating Responsive Web Design</h2>
                                <h5>Learn how to optimize your webpages for different screen sizes and platforms.</h5>
                                <div class="reviews">
                                    <a href="#">109 Reviews</a>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <p>orem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu. Vel an hinc putant fierent, saperet legimus offendit sed ei doctus volumus explicari qui ex, appareat similique an usu. . Dolor euripidis cum eu, ea per lucilius periculis corrumpit, ut euismod omittam ancillae his.</p>
                                <ul>
                                    <li><a href="#">HTML5, CSS3, and Media Queries</a></li>
                                    <li><a href="#">HTML5Shiv for Internet Explorer</a></li>
                                    <li><a href="#">Photoshop Image Optimization and Slicing</a></li>
                                    <li><a href="#">Design Adaptations for Various Screens</a></li>
                                </ul>
                            </div>
                            <div class="course-category">
                                <a href="#">Category: Design / Web Design </a>
                                <h3>26800 students enrolled </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="script/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="script/bootstrap.min.js" type="text/javascript"></script>
        <script src="script/carousel.js" type="text/javascript"></script>
    </body>


</html>