<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2006">
    <div class="container">     
        <div class="row">
            <div class="clearfix"></div>
            <div class="the-best">
                <p>The Best Websites for Free Online Courses, Certificates, Degrees, and Educational Resources</p>
                <h2>take $10 0ff for new users</h2>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>