<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-2025">
    <div class="contant">
        <div class="blog">
            <div class="comments">
                <h2>Latest Comments</h2>
                <ul>
                    <li>
                        <div class="thumb">
                            <a href="#"><img src="http://<?php echo $url_path ?>/images/comment-img.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h4><a href="#">John Doe</a></h4>
                            <p class="date">March 29, 2014 - 18:57PM</p>
                            <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                            <a href="#" class="btn-style">Reply</a>
                        </div>
                        <ul>
                            <li>
                                <div class="thumb">
                                    <a href="#"><img src="http://<?php echo $url_path ?>/images/comment-img.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">John Doe</a></h4>
                                    <p class="date">March 29, 2014 - 18:57PM</p>
                                    <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                    <a href="#" class="btn-style">Reply</a>
                                </div>
                            </li>

                            <li>
                                <div class="thumb">
                                    <a href="#"><img src="http://<?php echo $url_path ?>/images/comment-img.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h4><a href="#">John Doe</a></h4>
                                    <p class="date">March 29, 2014 - 18:57PM</p>
                                    <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                    <a href="#" class="btn-style">Reply</a>
                                </div>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#"><img src="http://<?php echo $url_path ?>/images/comment-img.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">John Doe</a></h4>
                                            <p class="date">March 29, 2014 - 18:57PM</p>
                                            <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                            <a href="#" class="btn-style">Reply</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#"><img src="http://<?php echo $url_path ?>/images/comment-img.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">John Doe</a></h4>
                                            <p class="date">March 29, 2014 - 18:57PM</p>
                                            <p>Volutpat viverra bibendum non, lacinia lacinia tortor. Curabitur pulvinar sodales mi eget pulvinar. Nullam vulputate lectus varius elit egestas sed semper arcu lobortis. </p>
                                            <a href="#" class="btn-style">Reply</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>