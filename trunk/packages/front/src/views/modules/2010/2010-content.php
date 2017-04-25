<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2010">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--CATEGORIES-->
                <div class="sidebar">
                    <div class="widget widget-course-categories">
                        <h2>Course Categorty</h2>
                        <ul>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office Productivity</a></li>
                            <li><a href="#">IT &amp; Software</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Personal Development</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Health &amp; Fitness</a></li>
                            <li><a href="#">Teacher Training</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Math &amp; Science</a></li>
                            <li><a href="#">Social Science</a></li>
                        </ul>
                    </div>
                </div>
                <!--/END CATEGORIES-->
            </div>
        </div>
    </div>
</div>