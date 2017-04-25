<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2022">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="bx-wrapper" style="max-width: 100%;">
                    <div class="" >
                        <img id="main_img" src="http://<?php echo $url_path ?>/images/course-detail1.png" alt="" style="width: 100%;"/>
                    </div>                      
                </div>
                <div id="bx-pager">
                    <a data-slide-index="0">
                        <img class="click" src="http://<?php echo $url_path ?>/images/course-detail1.png" alt="">
                    </a>
                    <a data-slide-index="1">
                        <img class="click" src="http://<?php echo $url_path ?>/images/course-detail2.png" alt="">
                    </a>
                    <a data-slide-index="2">
                        <img class="click" src="http://<?php echo $url_path ?>/images/course-detail3.png" alt="">
                    </a>
                    <a data-slide-index="3">
                        <img class="click" src="http://<?php echo $url_path ?>/images/course-detail4.png" alt="">
                    </a>
                    <a data-slide-index="4">
                        <img class="click" src="http://<?php echo $url_path ?>/images/course-detail1.png" alt="">
                    </a>
                    <a data-slide-index="5">
                        <img class="click" src="http://<?php echo $url_path ?>/images/course-detail2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="text">
                    <h2>Creating Responsive Web Design</h2>
                    <h5>Learn how to optimize your webpages for different screen sizes and platforms.</h5>
                    <div class="reviews">
                        <a href="#">109 Reviews</a>
                        <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                    </div>
                    <p>orem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu. Vel an hinc putant fierent, saperet legimus offendit sed ei doctus volumus explicari qui ex, appareat similique an usu. . Dolor euripidis cum eu, ea per lucilius periculis corrumpit, ut euismod omittam ancillae his.</p>
                    <ul>
                        <li><a href="#">HTML5, CSS3, and Media Queries</a></li>
                        <li><a href="#">HTML5Shiv for Internet Explorer</a></li>
                        <li><a href="#">Photoshop Image Optimization and Slicing</a></li>
                        <li><a href="#">Design Adaptations for Various Screens</a></li>
                    </ul>
                </div>
                <div class="course-category">
                    <a href="#">Category: Design / Web Design </a>
                    <h3>26800 students enrolled </h3>
                </div>
            </div>
        </div>
    </div>
</div>
