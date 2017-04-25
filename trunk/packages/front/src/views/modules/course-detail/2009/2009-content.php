<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2009">
    <div class="container fix">
        <div class="row">
            <div class="page-heading">
                <div class="container">
                    <h2>Course Detail</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                </div>
            </div>
        </div>
    </div>
</div>