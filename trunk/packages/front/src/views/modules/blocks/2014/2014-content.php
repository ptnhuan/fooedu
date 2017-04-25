<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2014">
    <section class="gray-bg">
        <div class="container">
            <div class="row">
                <!--INTRODUCTION LEFT-->
                <div class="col-md-6 introduction">
                    <div class="intro">
                        <h2>Everything you need to know</h2>
                        <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.
                            Cum copiosae pertinacia ei, admodum volumus cum ut, erat nonumy his te. Iudico praesent sed id, nam error consequat reprehendunt no. Nostrud nostrum tacimates mei ut, debet facilisi in ius, dolor accusam omittam eu sea. </p>
                    </div>
                </div>
                <!--/END INTRODUCTION LEFT-->

                <!--INTRODUCTION SLIDER RIGHT-->
                <div class="col-md-6 introduction">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!--WRAPPER FOR SLIDER-->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/mac-screen2.png" alt="Chania" width="460" height="266">
                            </div>

                            <div class="item">
                                <img src="images/mac-screen1.png" alt="Chania" width="460" height="266">
                            </div>

                            <div class="item">
                                <img src="images/mac-screen2.png" alt="Flower" width="460" height="266">
                            </div>

                            <div class="item">
                                <img src="images/mac-screen1.png" alt="Flower" width="460" height="266">
                            </div>
                        </div>
                        <!--/END WRAPPER FOR SLIDER-->

                        <!--LEFT AND RIGHT CONTROLS-->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/END LEFT AND RIGHT CONTROLS-->
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--/END INTRODUCTION SLIDER RIGHT-->
            </div>
        </div>
    </section>
</div>