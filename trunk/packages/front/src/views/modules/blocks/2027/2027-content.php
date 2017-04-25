<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>


<div class="type-2027">
    <div class="container">

        <div class="row events">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="thumb">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/events1.jpg" alt=""></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text">

                    <div class="event-header">
                        <span>Mon July 2</span>
                        <h2>Learn Creative Skills, Shape Your Future</h2>
                        <div class="data-tags">
                            <a href="#">Technology</a>
                        </div>
                    </div>


                    <div class="event-body">
                        <p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>


                    <div class="event-vanue">
                        <table>
                            <tbody><tr>
                                    <td><p class="color">Date:</p></td>
                                    <td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Venue:</p></td>
                                    <td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>
                                </tr>
                            </tbody></table>
                    </div>


                    <div class="  ">
                        <a href="#" class="btn-style">Register</a>
                    </div>

                </div>
            </div>

        </div>

        <div class="row events">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="thumb">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/events2.jpg" alt=""></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text">

                    <div class="event-header">
                        <span>Mon July 2</span>
                        <h2>Learn Creative Skills, Shape Your Future</h2>
                        <div class="data-tags">
                            <a href="#">Technology</a>
                        </div>
                    </div>


                    <div class="event-body">
                        <p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>


                    <div class="event-vanue">
                        <table>
                            <tbody><tr>
                                    <td><p class="color">Date:</p></td>
                                    <td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Venue:</p></td>
                                    <td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>
                                </tr>
                            </tbody></table>
                    </div>


                    <div class="  ">
                        <a href="#" class="btn-style">Register</a>
                    </div>

                </div>
            </div>

        </div>

        <div class="row events">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="thumb">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/events3.jpg" alt=""></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text">

                    <div class="event-header">
                        <span>Mon July 2</span>
                        <h2>Learn Creative Skills, Shape Your Future</h2>
                        <div class="data-tags">
                            <a href="#">Technology</a>
                        </div>
                    </div>


                    <div class="event-body">
                        <p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>


                    <div class="event-vanue">
                        <table>
                            <tbody><tr>
                                    <td><p class="color">Date:</p></td>
                                    <td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Venue:</p></td>
                                    <td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>
                                </tr>
                            </tbody></table>
                    </div>


                    <div class="  ">
                        <a href="#" class="btn-style">Register</a>
                    </div>

                </div>
            </div>

        </div>

        <div class="row events">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="thumb">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/events4.jpg" alt=""></a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text">

                    <div class="event-header">
                        <span>Mon July 2</span>
                        <h2>Learn Creative Skills, Shape Your Future</h2>
                        <div class="data-tags">
                            <a href="#">Technology</a>
                        </div>
                    </div>


                    <div class="event-body">
                        <p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    </div>


                    <div class="event-vanue">
                        <table>
                            <tbody><tr>
                                    <td><p class="color">Date:</p></td>
                                    <td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>
                                </tr>
                                <tr>
                                    <td><p class="color">Venue:</p></td>
                                    <td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>
                                </tr>
                            </tbody></table>
                    </div>


                    <div class="  ">
                        <a href="#" class="btn-style">Register</a>
                    </div>

                </div>
            </div>

        </div>

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

    </div>
</div>