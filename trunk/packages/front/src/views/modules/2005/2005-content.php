<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host ;
?>

<div class="type-2005">
    <div class="contant">
        <!--STUDENT PROFILE-->
        <div class="student-profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>600+ High Quality Courses</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. Sed id odio ante.</p>
                        <p class="color">Duis bibendum metus eu urna placerat mattis! Duis bibendum tempor massa at tristique. Integer viverr metus vitae lectus dictum eleifend amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. </p>
                        <p>Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. </p>
                        <a href="#" class="btn-style">View Courses</a>
                    </div>
                    <div class="col-md-6">
                        <img src="http://<?php echo $url_path ?>/front/images/student-profile1.jpg" alt="">
                    </div>  
                </div>
            </div>
        </div>
        <!--/END STUDENT PROFILE-->

        <!--STUDENT PROFILE-->
        <div class="student-profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>600+ High Quality Courses</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. Sed id odio ante.</p>
                        <p class="color">Duis bibendum metus eu urna placerat mattis! Duis bibendum tempor massa at tristique. Integer viverr metus vitae lectus dictum eleifend amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. </p>
                        <p>Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. </p>
                        <a href="#" class="btn-style">View Courses</a>
                    </div>
                    <div class="col-md-6">
                        <img src="http://<?php echo $url_path ?>/front/images/student-profile2.jpg" alt="">
                    </div>  
                </div>
            </div>
        </div>
        <!--/END STUDENT PROFILE-->

        <!--STUDENT PROFILE-->
        <div class="student-profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>600+ High Quality Courses</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. Sed id odio ante.</p>
                        <p class="color">Duis bibendum metus eu urna placerat mattis! Duis bibendum tempor massa at tristique. Integer viverr metus vitae lectus dictum eleifend amet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget elit eu velit vehicula feugiat. </p>
                        <p>Integer viverra metus vitae lectus dictum eleifend. Lorem ipsum dolor sit amet. Donec viverra lobortis feugiat. </p>
                        <a href="#" class="btn-style">View Courses</a>
                    </div>
                    <div class="col-md-6">
                        <img src="http://<?php echo $url_path ?>/front/images/student-profile1.jpg" alt="">
                    </div>  
                </div>
            </div>
        </div>
        <!--/END STUDENT PROFILE-->
    </div>
    <div class="clearfix"></div>
</div>