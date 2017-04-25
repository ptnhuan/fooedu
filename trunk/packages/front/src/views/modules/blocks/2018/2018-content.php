<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2018">
    <!--BLOG START-->
    <div class="blog-contant">
        <h2><a href="#">Summer Holidays Education</a></h2>
        <div class="blog-tags">
            Filed in: <a href="#">Online Courses</a> /  Tags: <a href="#">Fashion</a>, <a href="#">Learning</a>, <a href="#">webdesign</a>, <a href="#">Course</a>
        </div>
        <div class="thumb">
            <a href="#"><img src="http://<?php echo $url_path ?>/images/blog-img.jpg" alt=""></a>
        </div>
        <div class="text">
            <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
            <a href="#" class="btn-style">Read More</a>
        </div>
        <div class="blog-comments">
            <a href="#"><i class="fa fa-user"></i>David</a>
            <a href="#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>
            <a href="#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>
        </div>
    </div>
    <!--BLOG END-->


</div>

