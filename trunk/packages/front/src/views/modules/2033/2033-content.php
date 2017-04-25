<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2033">
    <div class="contant"> 
        <section>
            <div class="container">

                <!--TITLE OUR SERVICES-->
                <div class="sec-header">
                    <h2>Our Services</h2>
                    <p>Take a look at what we have are doing</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--/END TITLE OUR SERVICES-->

                <!--SERVICES-->
                <div class="row">

                    <!--EXPERT TEACHERS-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
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
                    <!--/END EXPERT TEACHERS-->

                    <!--TRUSTED CERTIFICATIONS-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
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
                    <!--/END TRUSTED CERTIFICATIONS-->

                    <!--START LEARNING-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
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
                    <!--/END START LEARNING-->

                </div>
                <!--/END SERVICES-->
            </div>
        </section> 
    </div>
    <div class="clearfix"></div>
</div>