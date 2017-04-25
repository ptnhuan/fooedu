<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2040">
    <div class="container ie-pg">
        <div class="row">
            <div class="post-contant">
                <div class="sec-header-server">
                    <h2>Popular Posts</h2>
                    <p>Latest From Blog</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="post">
                                    <div class="thumb">
                                        <img src="http://<?php echo $url_path ?>/images/post.png" alt="">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <div class="black"></div>
                                    </div>

                                    <div class="header-server">

                                        <div class="post-date">
                                            <p>May<span>11</span>2014</p>
                                        </div>

                                        <div class="icons">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Notification">
                                                        <i class="fa fa-heart-o"></i><span id="notification-counter">25</span>
                                                    </a>
                                                </li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Share">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Message">
                                                        <i class="fa fa-comments-o"></i>
                                                    </a>
                                                </li>
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
                                        <img src="http://<?php echo $url_path ?>/images/post.png" alt="">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <div class="black"></div>
                                    </div>

                                    <div class="header-server">

                                        <div class="post-date">
                                            <p>May<span>11</span>2014</p>
                                        </div>

                                        <div class="icons">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Notification">
                                                        <i class="fa fa-heart-o"></i><span id="notification-counter">25</span>
                                                    </a>
                                                </li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Share">
                                                        <i class="fa fa-link"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Message">
                                                        <i class="fa fa-comments-o"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="clear"></div>
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




</div>

