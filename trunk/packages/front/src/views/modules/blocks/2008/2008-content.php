<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2008">
    <div class="container">
        <div class="row">
            <!--BUTTON SOCIAL-->
            <div class="buttons">
                <button class="btn1 login-btn"><i class="fa fa-facebook"></i>Login with Facebook</button>
                <button class="btn2 login-btn"><i class="fa fa-google-plus"></i>Login with Google</button>
                <button class="btn3 login-btn"><i class="fa fa-yahoo"></i>Login with Yahoo</button>
                <button class="btn4 login-btn"><i class="fa fa-linkedin"></i>Login with Linkein</button>
                <button class="btn5 login-btn"><i class="fa fa-windows"></i>Login with Window Live</button>
            </div>
            <!--/END BUTTON SOCIAL-->
        </div>
    </div>
</div>