<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>
<div class="type-2031">
    <div class="content">
        <div class="featured-courses">
            <h2>Browsing All Topics</h2>

            <div class="row height-row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course1.jpg"></a>
                            <div class="price"><span>$</span>21</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Music</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$800</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course1.jpg"></a>
                            <div class="price"><span>$</span>21</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Music</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$800</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            

               

              

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course2.jpg"></a>
                            <div class="price"><span>$</span>32</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Holidays Education</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$750</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course3.jpg"></a>
                            <div class="price"><span>$</span>75</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Marketing</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$925</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course4.jpg"></a>
                            <div class="price"><span>$</span>25</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Management</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$1000</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course1.jpg"></a>
                            <div class="price"><span>$</span>21</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Music</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$800</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course2.jpg"></a>
                            <div class="price"><span>$</span>32</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Holidays Education</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$750</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course3.jpg"></a>
                            <div class="price"><span>$</span>75</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Marketing</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$925</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="course">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/course4.jpg"></a>
                            <div class="price"><span>$</span>25</div>
                        </div>
                        <div class="text">
                            <div class="height-equal">
                                <div class="header">
                                    <h4>Management</h4>
                                    <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div>
                                </div>
                                <div class="course-name">
                                    <p>How to play the guitar</p>
                                    <span>$1000</span>
                                </div>

                            </div>
                            <div class="course-detail-btn">
                                <a href="#">Subscribe</a>
                                <a href="#">Detail</a>
                            </div>
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
</div>

