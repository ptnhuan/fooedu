<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host ;
?>

<div class="type-2037">
    <div class="contant">
        <section>
            <div class="container">
                <!--OUR PRICING-->
                <div class="sec-header">
                    <h2>Our Pricing</h2>
                    <p>Check Our Latest Rates</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--/END OUR PRICING-->

                <!--3 BOX PRICING-->
                <div class="row height-row">
                    <!--BOX PRICING 1-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="price-box">
                            <div class="header">
                                <h2>Basic Plan</h2>
                                <p>This is the light version</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="rate">
                                <h2>50$</h2>
                                <p>/Per Month</p>
                            </div>
                            <div class="price-contant">
                                <p>300+ Audio Lesson mp3s</p>
                                <p class="striped">50 one-hour long CD’s</p>
                                <p><i class="fa fa-check"></i></p>
                                <p class="striped">On-line support</p>
                            </div>
                            <div class="price-footer">
                                <a href="#">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <!--/END BOX PRICING 1-->

                    <!--BOX PRICING 2-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="price-box">
                            <div class="header">
                                <h2>Standart Plan</h2>
                                <p>This is the light version</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="rate">
                                <h2>100$</h2>
                                <p>/Per Month</p>
                            </div>
                            <div class="price-contant">
                                <p>400+ Audio Lesson mp3s</p>
                                <p class="striped">400+ Printable Lecture Notes </p>
                                <p><i class="fa fa-check"></i></p>
                                <p class="striped">On-line support</p>
                            </div>
                            <div class="price-footer">
                                <a href="#">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <!--/END BOX PRICING 2-->

                    <!--BOX PRICING 3-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="price-box">
                            <div class="header">
                                <h2>Exculsive Plan</h2>
                                <p>This is the light version</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="rate">
                                <h2>150$</h2>
                                <p>/Per Month</p>
                            </div>
                            <div class="price-contant">
                                <p>Unlimited 1-on-1 Personal Coaching</p>
                                <p class="striped">24 hour virtual classroom Q&amp;A</p>
                                <p><i class="fa fa-check"></i></p>
                                <p class="striped">On-line support</p>
                            </div>
                            <div class="price-footer">
                                <a href="#">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <!--/END BOX PRICING 3-->

                </div>
                <!--3 BOX PRICING-->
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>