<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2007">
    <div class="container">
        <!--FORM INFOMATION-->
        <div class="row">
            <div class="col-md-9">
                <div class="form-box">
                    <form>
                        <!--INFORMATION-->
                        <div class="form-body">
                            <fieldset>
                                <h2>First time here? Sign up now!</h2>
                                <div class="row-fluid">
                                    <div class="col-md-6 form-sign ">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Enter your First Name" class="input-block-level">
                                    </div>
                                    <div class="col-md-6 form-sign ">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Enter your Last Name" class="input-block-level">
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="col-md-6 form-sign ">
                                        <label>Enter Email</label>
                                        <input type="text" placeholder="Enter your E-mail ID" class="input-block-level">
                                    </div>
                                    <div class="col-md-6 form-sign ">
                                        <label>Enter Phone number</label>
                                        <input type="text" placeholder="Enter your Phone Number" class="input-block-level">
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="col-md-6 form-sign ">
                                        <label>Select Your City</label>
                                        <select class="input-block-level">
                                            <option>HaNoi</option>
                                            <option>Hawai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-sign ">
                                        <label>Gender</label>
                                        <select class="input-block-level">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="col-md-6 form-sign ">
                                        <label>Education Level</label>
                                        <input type="text" placeholder="Enter your Education Level" class="input-block-level">
                                    </div>
                                    <div class="col-md-6 form-sign ">
                                        <label>Age</label>
                                        <input type="text" placeholder="Enter your age" class="input-block-level">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <!--/END INFORMATION-->

                        <!--YOUR REFERENCES--> 
                        <div class="footer">
                            <h2>Your Preferences</h2>
                            <div class="row-fluid">
                                <div class="col-md-6 form-sign">
                                    <label>Select Your Course</label>
                                    <input type="text" placeholder="Enter Your Course" class="input-block-level">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="col-md-12">
                                    <div class="row">
                                        <label>Additional Message</label>
                                        <textarea placeholder="Your Message" class="input-block-level" rows="8"></textarea>
                                    </div>
                                </div>
                                <p class="pull-left">By registering, You accept Terms &amp; Conditions</p>
                                <!--BUTTON SUBMIT-->
                                <button type="submit" class="btn-style pull-right">Submit</button>
                                <!--/END BUTTON SUBMIT-->
                            </div>
                        </div>
                        <!--/END YOUR REFERENCES-->
                    </form>
                </div>
            </div>
            <!--FORM INFOMATION-->
        </div>
    </div>
</div>