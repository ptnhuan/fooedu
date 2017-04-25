<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2032">
    <div class="content">
        <div class="sidebar">
            <div class="widget widget-course-categories">
                <h2>Course Categorty</h2>
                <ul>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Office Productivity</a></li>
                    <li><a href="#">IT &amp; Software</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Personal Development</a></li>
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Health &amp; Fitness</a></li>
                    <li><a href="#">Teacher Training</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Math &amp; Science</a></li>
                    <li><a href="#">Social Science</a></li>
                </ul>
            </div>

            <div class="widget">
                <div class="box">
                    <h2>Our Next Courses</h2>
                    <ul class="event-galley next-course">

                        <li>

                            <div class="thumb">
                                <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/event1.png"></a>
                            </div>

                            <div class="text">
                                <h4><a href="#">Computer</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="rate"><small>$</small> 27</span>
                            </div>
                        </li>


                        <li>
                            <div class="thumb">
                                <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/event2.png"></a>
                            </div>
                            <div class="text">
                                <h4><a href="#">Computer</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="rate"><small>$</small> 27</span>
                            </div>
                        </li>

                        <li>
                            <div class="thumb">
                                <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/event3.png"></a>
                            </div>
                            <div class="text">
                                <h4><a href="#">Computer</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="rate"><small>$</small> 27</span>
                            </div>
                        </li>

                        <li>
                            <div class="thumb">
                                <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/event4.png"></a>
                            </div>
                            <div class="text">
                                <h4><a href="#">Computer</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="rate"><small>$</small> 27</span>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="widget widget-slider">
                <h2>Upcoming Courses</h2>
                <div class="span12">
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item"><img src="http://<?php echo $url_path ?>/images/side-slider.png" alt="The Last of us"></div>
                        <div class="item"><img src="http://<?php echo $url_path ?>/images/side-slider2.png" alt="The Last of us"></div>
                        <div class="item"><img src="http://<?php echo $url_path ?>/images/side-slider.png" alt="The Last of us"></div>
                    </div>
                    <div class="text">
                        <p>Creating Responsive Web Design</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true
            });
        });
    </script>
</div>