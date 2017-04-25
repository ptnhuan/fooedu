<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2017">
    <div class="container fix">
        <div class="row">
            <!--RIGHT-->
            <div class="col-md-4">
                <div class="sidebar">
                    <!--WIDGET SEARCH-->
                    <div class="widget widget-search-course">
                        <h2><i class="fa fa-search"></i> Search Course</h2>
                        <div class="styled-select">
                            <select class="input-block-level">
                                <option>Here is the first option</option>
                                <option>The second option</option>
                            </select>
                        </div>
                        <p><input type="text" class="input-block-level" placeholder="Search by Keyword"></p>
                        <button class="btn-style">Search</button>
                    </div>
                    <!--/END WIDGET SEARCH-->

                    <!--WIDGET POST-->
                    <div class="widget widget-papular-post">
                        <h2>Popular Posts</h2>
                        <ul>

                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>


                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post2.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>


                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post3.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>


                            <li>
                                <h4>Donec neque ipsum, sodales nec trist</h4>
                                <div class="thumb">
                                    <a href="#"><img src="images/papular-post4.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <p class="date">19 May 2012 <span>Admin</span></p>
                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!--/END WIDGET POST-->

                    <!--WIDGET FLICKS-->
                    <div class="widget widget-flickr">
                        <h2>Flickr Photos</h2>
                        <ul>
                            <li><a href="#"><img src="images/flickr.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/flickr2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/flickr3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/flickr4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/flickr5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/flickr6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/flickr2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/flickr3.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <!--/END WIDGET FLICKS-->

                </div>
            </div>
            <!--/END RIGHT-->
        </div>
    </div>
</div>