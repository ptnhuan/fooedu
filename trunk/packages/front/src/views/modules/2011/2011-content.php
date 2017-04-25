<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2011">
    <div class="container">
        <!--button-->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-box">
                    <form>
                        <div class="form-body">
                            <fieldset>
                                <legend>Login Below:</legend>
                                <label>Email Address</label>
                                <input type="text" placeholder="Enter your E-mail ID" class="input-block-level">
                                <label>Password</label>
                                <input type="password" placeholder="Enter Password" class="input-block-level">
                                <button type="submit" class="btn-style">Submit</button>
                            </fieldset>
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="#">I Forgot My Password</a></li>
                                <li><a href="#">Re-send Confirmation Email</a></li>
                                <li><a href="#">Sign up Today for Free!</a></li>
                                <li><a href="#">Terms of Use</a></li>
                            </ul>
                            <button class="btn-style">Register</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-box">
                    <form>
                        <div class="form-body">
                            <fieldset>
                                <legend>First time here? Sign up now!</legend>
                                <div class="row-fluid">
                                    <div class="col-md-6 col-sm-6 col-xs-12 row-content">
                                        <label>First Name</label>
                                        <input type="text" placeholder="First Name" class="input-block-level">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 row-content">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Last Name" class="input-block-level">
                                    </div>
                                </div>
                                <label>Email Address</label>
                                <input type="text" placeholder="Enter your E-mail ID" class="input-block-level">
                                <label>Password</label>
                                <input type="password" placeholder="Enter Password" class="input-block-level">
                                <button type="submit" class="btn-style">Sign Up</button>
                            </fieldset>
                        </div>
                        <div class="footer">
                            <p>By Registering, You Accept Terms &amp; Conditions</p>
                        </div>
                    </form>
                </div>
            </div>
            <!--categories-->
        </div>
    </div>
</div>