<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host ;
?>

<div class="type-2000">
    <div class="container">
        <div class="row">
            <div class="error">
                <p class="error-404">4<span><img src="http://<?php echo $url_path ?>/front/images/error.png" alt=""></span>4</p>
                <p class="ohh">Uh Oh! Looks like something broke.</p>
                <p class="away">Take me away <span class="color">or</span> Report This</p>
            </div>
        </div>
    </div>
</div>