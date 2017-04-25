<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2030">
    <div class="container">
        <div class="event-page">
            <div class="admin">
                <div class="col-md-2 col-sm-2 tablet-2 col-xs-12">
                    <div class="row">
                        <div class="thumb">
                            <a href="#"><img alt="" src="http://<?php echo $url_path ?>/images/admin.jpg"></a>
                        </div>
                    </div>                   
                </div>
                <div class="col-md-10 col-sm-10 tablet-10 col-xs-12">
                    <div class="row">
                        <div class="text">
                            <div class="social-icons">
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a title="" data-toggle="tooltip" href="#" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <h2><a href="#">Administrator</a></h2>
                            <p class="profession">Photographer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nulla metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus tristique aliquet semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                        </div>
                    </div>                  
                </div>

            </div>

            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="leave-reply">
                        <h2>Leave Us a Reply</h2>
                        <form>
                            <div class="row-fluid">
                                <div class="col-md-4 col-sm-4 col-xs-12 text-content">
                                    <div class="row">
                                        <input type="text" placeholder="Name" class=" ">
                                    </div>                                          
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-content">
                                    <div class="row">
                                        <input type="text" placeholder="E-mail" class=" ">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-content">
                                    <div class="row">
                                        <input type="text" placeholder="Website" class=" ">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <textarea placeholder="Comments" class=""></textarea>
                                        <button class="btn-style">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="campaign">
                        <h4>Campaign Launched on 25 January, 2014 at LONDON, UK</h4>
                        <p>share THIS CAMPAIGN</p>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                            <a href="#"><i class="fa fa-comment-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>