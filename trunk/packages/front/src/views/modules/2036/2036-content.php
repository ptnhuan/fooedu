<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host ;
?>

<div class="type-2036">
    <section class="gray-bg">
        <div class="container contant">
            <div class="row height-row">

                <!--EVENT GALLEY-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h2><strong>Event Gallery</strong></h2>
                        <ul class="event-galley">
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <p>21-04-2012</p>
                                    <h4>most popular courses </h4>
                                    <a href="#" class="tags">Equipment</a>
                                    <a href="#" class="tags">tips</a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <p>21-04-2012</p>
                                    <h4>most popular courses </h4>
                                    <a href="#" class="tags">Equipment</a>
                                    <a href="#" class="tags">tips</a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <p>21-04-2012</p>
                                    <h4>most popular courses </h4>
                                    <a href="#" class="tags">Equipment</a>
                                    <a href="#" class="tags">tips</a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <p>21-04-2012</p>
                                    <h4>most popular courses </h4>
                                    <a href="#" class="tags">Equipment</a>
                                    <a href="#" class="tags">tips</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--/END EVENT GALLEY-->

                <!--ABOUT TRIAL LESSONS-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="box lesson">
                        <h2><strong>About Trial Lessons</strong></h2>
                        <iframe src="http://player.vimeo.com/video/89700179?badge=0"></iframe>
                        <div class="text">
                            <h3 class="pull-left">Learn Photography </h3>
                            <span class="pull-right">$6 Per Hour</span>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
                        </div>
                    </div>
                </div>
                <!--/END ABOUT TRIAL LESSONS-->

                <!--OUR NEXT COURSES-->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <h2><strong>Our Next Courses</strong></h2>
                        <!--EVENT GALLEY-->
                        <ul class="event-galley">
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">Computer</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span class="rate"><small>$</small> 27</span>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">Computer</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span class="rate"><small>$</small> 27</span>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">Computer</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span class="rate"><small>$</small> 27</span>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/event1.png"></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">Computer</a></h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                    <span class="rate"><small>$</small> 27</span>
                                </div>
                            </li>
                        </ul>
                        <!--/END EVENT GALLEY-->
                    </div>
                </div>
                <!--/END OUR NEXT COURSES-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
</div>