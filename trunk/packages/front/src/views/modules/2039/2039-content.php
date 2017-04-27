<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host ;
?>

<div class="type-2039">
    <div class="container">
        <div class="sec-header">
            <h2>Latest Courses</h2>
            <p>Check Our Featured Courses</p>
            <span></span>
            <span></span>
            <span></span>
        </div> 
        <div class="row">
            <ul class="nav nav-tabs ie-tab-fix">
                <li class="active"><a data-toggle="tab" href="#home" > <i class="fa fa-book"></i>
                        <p> Web & Mobile</p></a></li>
                <li><a data-toggle="tab" href="#home2" > <i class="fa fa-book"></i>
                        <p> Music & Production</p></a></li>
                <li><a data-toggle="tab" href="#home3" > <i class="fa fa-book"></i>
                        <p> Math & Science</p></a></li>
                <li><a data-toggle="tab" href="#home4" > <i class="fa fa-book"></i>
                        <p> Music & Production</p></a></li>
                <li><a data-toggle="tab" href="#home5" > <i class="fa fa-book"></i>
                        <p> Photography </p></a></li>
                <li><a data-toggle="tab" href="#home6" > <i class="fa fa-book"></i>
                        <p> Geography</p></a></li>
                <li><a data-toggle="tab" href="#home7" > <i class="fa fa-book"></i>
                        <p> Arts & Crafts </p></a></li>
            </ul>  
        </div>
    </div>
    <div class="content-tab">
        <div class="container">

            <div class="tab-content ie-content-fix">
                <div id="home" class="tab-pane fade in active">
                    <ul class="course-topics row">
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/images/topic4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                    </ul>
                </div>


                <div id="home2" class="tab-pane fade in">
                    <ul class="course-topics row">
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>

                    </ul>
                </div>

                <div id="home3" class="tab-pane fade in">
                    <ul class="course-topics row">
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>                                             
                    </ul>
                </div>

                <div id="home4" class="tab-pane fade in">
                    <ul class="course-topics row">
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>   
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>

                    </ul>
                </div>

                <div id="home5" class="tab-pane fade in">
                    <ul class="course-topics row">
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>   
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>                                                                  
                    </ul>
                </div>

                <div id="home6" class="tab-pane fade in">
                    <ul class="course-topics row">
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>   
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>   
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/images/topic1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>                                                               
                    </ul>
                </div>

                <div id="home7" class="tab-pane fade in">
                    <ul class="course-topics row">
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>  
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/topic2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>   
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>   
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic5.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-4 col-xs-6 col-12">
                            <div class="thumb-content">
                                <a href="#"><img src="http://<?php echo $url_path ?>/front/images/topic6.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h4>HTML5 Programming</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span>$ 199</span>
                            </div>
                        </li>                                                             
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>