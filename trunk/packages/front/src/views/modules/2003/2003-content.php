<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2003">
    <div class="contant">
        <!--OUR TEACHER-->
        <section class="gray-bg">
            <div class="container">
                <div class="row">
                    <!--TEACHER 1-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 1-->

                    <!--TEACHER 2-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 2-->

                    <!--TEACHER 3-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 3-->

                    <!--TEACHER 4-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 4-->

                    <!--TEACHER 5-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 5-->

                    <!--TEACHER 6-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 6-->

                    <!--TEACHER 7-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 7-->

                    <!--TEACHER 8-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <!--/END TEACHER 8-->

                </div>

                <!--PAGINATION-->
                <div class="pagination">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!--/END PAGINATION-->
            </div>
        </section>
        <!--/END OUR TEACHER-->
    </div>
</div>