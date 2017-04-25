<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2035">
    <div class="contant">
        <section class="gray-bg">
            <div class="container">
                <!--TITLE OUR TEACHER-->
                <div class="sec-header">
                    <h2><strong>Our Teachers</strong></h2>
                    <p>Discover courses by topic</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--/END TITLE OUR TEACHER-->

                <!--TEACHER-->
                <div class="row">
                    <div class="col-md-12 ie-padding-teacher">
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
                                <div class="thumb-teacher">
                                    <a href="#"><img src="http://<?php echo $url_path ?>/images/teachers4.jpg" class="img-responsive" alt=""></a>
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
                                <div class="thumb-teacher">
                                    <a href="#"><img src="http://<?php echo $url_path ?>/images/teachers4.jpg" alt=""></a>
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
                                <div class="thumb-teacher">
                                    <a href="#"><img src="http://<?php echo $url_path ?>/images/teachers4.jpg" alt=""></a>
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
                                <div class="thumb-teacher">
                                    <a href="#"><img src="http://<?php echo $url_path ?>/images/teachers4.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">Mickey Rorey</a></h2>
                                    <p>Science Teacher</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/END TEACHER-->
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>