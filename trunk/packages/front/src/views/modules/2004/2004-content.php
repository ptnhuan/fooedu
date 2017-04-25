<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2004">
    <div class="container">
        <div class="row">
            <div class="search-result">
                <h1>Page Not Found!</h1>
                <h2>Page you are looking for has been removed. Back to <a href="#">HOME</a></h2>
                <div class="cover">
                    <input type="text" class="input-block-level" placeholder="Enter Your Keyword">
                    <button class="btn-style"><i class="fa fa-search"></i> </button>
                </div>
            </div>
        </div>
    </div>
</div>