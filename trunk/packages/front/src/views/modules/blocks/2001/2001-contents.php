<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-2001">
    <div class="container">
        <div class="row">
            <div class="teacher-profile">
                <div class="col-md-4">
                    <div class="profile">
                        <div class="profile-back">
                            <img src="images/profile-bg.jpg" alt="">
                        </div>
                        <div class="thumb">
                            <img src="images/teacher-profile.jpg" alt="">
                        </div>
                        <div class="title">
                            <h4>Emilia Clarke</h4>
                            <p>Actress</p>
                        </div>
                        <div class="detail">
                            <table>
                                <tbody><tr>
                                        <td>Name:</td>
                                        <td>Marc Twain</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>info@domain.com</td>
                                    </tr>
                                    <tr>
                                        <td>Telephone:</td>
                                        <td>+34 004238423</td>
                                    </tr>
                                    <tr>
                                        <td>Country:</td>
                                        <td>United Kindom</td>
                                    </tr>
                                    <tr>
                                        <td>Gender: </td>
                                        <td>Female</td>
                                    </tr>
                                    <tr>
                                        <td>Education:</td>
                                        <td>Degree level</td>
                                    </tr>
                                    <tr>
                                        <td>Age:</td>
                                        <td>34</td>
                                    </tr>
                                </tbody></table>
                        </div>
                        <div class="followers">
                            <i class="fa fa-users"></i>
                            <a href="#"><span>1254</span>Followers</a>
                            <a href="#"><span>458</span>following</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bio">
                        <h2>My Biography</h2>
                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel</p>
                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel</p>
                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel</p>
                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>