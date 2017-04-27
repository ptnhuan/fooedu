<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host;
?>
<div class="type-2043">
    <div class="container">
        <div class="">
            <div class="content">
                <div class="sec-header">
                    <h2>Latest Courses</h2>
                    <p>Check Our Featured Courses</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>                                              
                <div class="featured-courses">
                    <div  id="carousel-1" class="owl-carousel owl-theme">
                        <div class="item ">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course1.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course2.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course3.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course4.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course1.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course2.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course3.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course4.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course1.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course2.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course3.jpg"></a>
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

                        <div class="item">
                            <div class="course">
                                <div class="thumb-img-slide">
                                    <a href="#"><img alt="" src="http://<?php echo $url_path ?>/front/images/course4.jpg"></a>
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
                </div>
            </div>
        </div>

       
    </div>
</div>

