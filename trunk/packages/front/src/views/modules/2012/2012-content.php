<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2012">
    <div class="container">
        <div class="latest-news">
            <div class="news-contant">
                <div class="thumb">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/news-thumb.jpg" alt=""></a>
                </div>
                <div class="text">
                    <h2>Learn Creative Skills, Shape Your Future</h2>
                    <div class="data-tags">
                        <p>Posted on July 28, 2014</p>
                        <a href="#">Technology</a>
                        <a href="#">James Shah</a>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    <a href="#" class="btn-style">Read More</a>
                </div>
            </div>

            <div class="news-contant">
                <div class="thumb">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/news-thumb.jpg" alt=""></a>
                </div>
                <div class="text">
                    <h2>Learn Creative Skills, Shape Your Future</h2>
                    <div class="data-tags">
                        <p>Posted on July 28, 2014</p>
                        <a href="#">Technology</a>
                        <a href="#">James Shah</a>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    <a href="#" class="btn-style">Read More</a>
                </div>
            </div>
            <div class="news-contant">
                <div class="thumb">
                    <a href="#"><img src="http://<?php echo $url_path ?>/images/news-thumb.jpg" alt=""></a>
                </div>
                <div class="text">
                    <h2>Learn Creative Skills, Shape Your Future</h2>
                    <div class="data-tags">
                        <p>Posted on July 28, 2014</p>
                        <a href="#">Technology</a>
                        <a href="#">James Shah</a>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                    <a href="#" class="btn-style">Read More</a>
                </div>
            </div>
        </div>

        <!--PAGINATION-->
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
        <!--/END PAGINATION-->

    </div>
</div>