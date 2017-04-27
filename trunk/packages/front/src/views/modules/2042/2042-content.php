
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host ;
?>

<div class="type-2042">  
    <div class="form">
        <div class="form-contant relative">
            <div class="container form-fields">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="span6">
                            <img src="http://<?php echo $url_path ?>/front/images/student.png">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="span6">
                            <div class="student-form">
                                <div class="header">
                                    <h2>Student Form</h2>
                                    <p>Learn how to build websites &amp; apps, write code or start a business.</p>
                                </div>
                                <form class="form-data">
                                    <ul>
                                        <div class="input">
                                            <li><input type="text" placeholder="Name"></li>
                                            <li><input type="text" placeholder="Email ID"></li>
                                            <li><input type="text" placeholder="Phone Number"></li>
                                            <li><input type="text" placeholder="Select Course"></li>
                                        </div>
                                        <li>
                                            <div class="gender">
                                                <span>
                                                    <input name="gender" type="radio" value="" id="male">
                                                    <label for="male">Male</label>
                                                </span>
                                                <span>
                                                    <input name="gender" type="radio" value="" id="female">
                                                    <label for="female">Female</label>
                                                </span>
                                            </div>
                                            <button>Submit</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bg1" class="skrollable"></div>
            <div id="bg2" class="skrollable"></div>
            <div id="bg3" class="skrollable"</div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>