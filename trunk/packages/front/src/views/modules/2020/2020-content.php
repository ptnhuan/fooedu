<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host ;
?>

<div class="type-2020">
    <div class="sidebar">      
        <div class="inner">
            <h2>Visit Our Top Courses</h2>
            <div class="top-courses">
                <div class="col-md-5 col-sm-12 col-xs-3 slide-visit">
                    <div class="row">
                        <div class="thumb">
                            <div class="widget widget-slider" id="myCarousel">
                                <div id="owl-demo" class="owl-carousel">
                                    <div class="item"><img src="http://<?php echo $url_path ?>/front/images/top-courses.jpg" alt="The Last of us"></div>
                                    <div class="item"><img src="http://<?php echo $url_path ?>/front/images/top-courses2.jpg" alt="The Last of us"></div>
                                    <div class="item"><img src="http://<?php echo $url_path ?>/front/images/top-courses3.jpg" alt="The Last of us"></div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-9 slide-visit">
                    <div class="row">
                        <div class="text">
                            <h4><a href="#">Intro to Java Programming</a></h4>
                            <p>Learn essential computer science and object- oriented programming concepts in this introductory Java course. </p>
                            <a href="#" class="btn-style">Lets Visit</a>
                        </div>
                    </div>
                </div>

            </div>


        </div>  

    </div>



    
</div>