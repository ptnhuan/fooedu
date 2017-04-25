<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2016">
    <!--ENVENTS-->
    <section class="upcoming-events">
        <div class="container pd-slide">
            <div class="bx-wrapper">
                <div class="bx-viewport">
                    <ul class="bxslider">

                        <!--EVENT 1-->
                        <li>
                            <div class="event-contant">
                                <div class="thumb">
                                    <a href="#"><img src="images/event-img.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2>Upcoming Events 1</h2>
                                    <h4>Free Seminar at London14 May 2014 10:00 am</h4>
                                    <p>Quisque tortor nisi, tristique sit amet commodo vel, commodo at mauris. Vestibulum vel justo neque, non pharetra orci. Integer nec est mauris, in vestibulum elit. Nulla facilisi. Praesent eu dolor lacus. Vestibulum laoreet sodales...</p>
                                </div>
                            </div>
                        </li>
                        <!--/END EVENT 1-->

                        <!--EVENT 2-->
                        <li>
                            <div class="event-contant">
                                <div class="thumb">
                                    <a href="#"><img src="images/event-img2.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2>Upcoming Events 2</h2>
                                    <h4>Free Seminar at London14 May 2014 10:00 am</h4>
                                    <p>Quisque tortor nisi, tristique sit amet commodo vel, commodo at mauris. Vestibulum vel justo neque, non pharetra orci. Integer nec est mauris, in vestibulum elit. Nulla facilisi. Praesent eu dolor lacus. Vestibulum laoreet sodales...</p>
                                </div>
                            </div>
                        </li>
                        <!--/END EVENT 2-->

                        <!--EVENT 3-->
                        <li>
                            <div class="event-contant">
                                <div class="thumb">
                                    <a href="#"><img src="images/event-img3.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2>Upcoming Events 3</h2>
                                    <h4>Free Seminar at London14 May 2014 10:00 am</h4>
                                    <p>Quisque tortor nisi, tristique sit amet commodo vel, commodo at mauris. Vestibulum vel justo neque, non pharetra orci. Integer nec est mauris, in vestibulum elit. Nulla facilisi. Praesent eu dolor lacus. Vestibulum laoreet sodales...</p>
                                </div>
                            </div>
                        </li>
                        <!--/END EVENT 3-->

                    </ul>
                </div>
                <!--BUTTON CONTROLS-->
                <div class="bx-controls">
                    <div class="bx-controls-direction">
                        <a id="slider-prev" class="btn-prev" href="#"></a>
                        <a id="slider-next" class="btn-next" href="#"></a>
                    </div>
                </div>
                <!--/END BUTTON CONTROLS-->
            </div>
        </div>
    </section>
    <!--/END ENVENTS-->
</div>