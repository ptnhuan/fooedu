<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2015">
    <div class="container">
        <div class="row">
            <!--ACCORDION CHOOSE US-->
            <div class="col-md-8">
                <div class="faq">
                    <h2>why choose us</h2>

                    <!--ACCORDION 1-->
                    <div class="accordion_cp accordion-close" id="section1">
                        <p>we provide courses at affordable prices</p>
                        <span><i class="fa fa-minus"></i></span>
                    </div>
                    <div class="contain_cp_accor" style="display: none;">
                        <div class="content_cp_accor">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <!--/END ACCORDION 1-->

                    <!--ACCORDION 2-->
                    <div class="accordion_cp accordion-close" id="section2">
                        <p>WE PROVIDE A VARIETY OF COURSES cHECK OUT THE COUSES NOW</p>
                        <span><i class="fa fa-minus"></i></span>
                    </div>
                    <div class="contain_cp_accor" style="display: none;">
                        <div class="content_cp_accor">
                            <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <!--/END ACCORDION 2-->

                    <!--ACCORDION 3-->
                    <div class="accordion_cp accordion-close" id="section3">
                        <p>We have world class teaching facilities</p>
                        <span><i class="fa fa-minus"></i></span>
                    </div>
                    <div class="contain_cp_accor" style="display: none;">
                        <div class="content_cp_accor">
                            <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <!--/END ACCORDION 3-->

                    <!--ACCORDION 4-->
                    <div class="accordion_cp accordion-close" id="section4">
                        <p>Learning Management</p>
                        <span><i class="fa fa-minus"></i></span>
                    </div>
                    <div class="contain_cp_accor" style="display: none;">
                        <div class="content_cp_accor">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <!--/END ACCORDION 4-->

                    <!--ACCORDION 5-->
                    <div class="accordion_cp accordion-close" id="section5">
                        <p>Learn Cooking Basics Online</p>
                        <span><i class="fa fa-minus"></i></span>
                    </div>
                    <div class="contain_cp_accor" style="display: none;">
                        <div class="content_cp_accor">
                            <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <!--/END ACCORDION 5-->

                    <!--ACCORDION 6-->
                    <div class="accordion_cp accordion-close" id="section6">
                        <p>What you have to know about MBA</p>
                        <span><i class="fa fa-minus"></i></span>
                    </div>
                    <div class="contain_cp_accor" style="display: none;">
                        <div class="content_cp_accor">
                            <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <!--/END ACCORDION 6-->

                    <!--ACCORDION 7-->
                    <div class="accordion_cp accordion-close" id="section7">
                        <p>WE PROVIDE A VARIETY OF COURSES cHECK OUT THE COUSES NOW</p>
                        <span><i class="fa fa-minus"></i></span>
                    </div>
                    <div class="contain_cp_accor" style="display: none;">
                        <div class="content_cp_accor">
                            <p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>
                        </div>
                    </div>
                    <!--/END ACCORDION 7-->

                </div>
            </div>
            <!--/END ACCORDION CHOOSE US-->
        </div>
    </div>
</div>