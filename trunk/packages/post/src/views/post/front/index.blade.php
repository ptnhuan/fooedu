<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('foosteel/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('foosteel/less/Agricultural-Engineering-less.less', 'foosteel/css/Agricultural-Engineering-css.css');
        ?>
        <link href="{{asset('foosteel/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('foosteel/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('foosteel/css/Agricultural-Engineering-css.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Phan  gioi thieu mo hinh-->
        <div class="wd-row">
            <div class="container">

                <div class="chia col-md-8" style="padding: 0px;">
                      <?php foreach ($posts as $post): ?>
                    <div class="col-md-6">
                      

                        <img src="<?php echo $post['post_img'] ?>" style="width: 100%;">
                        <h4><?php echo $post['post_name'] ?></h4>
                        <p><?php echo $post['post_noidung'] ?></p>
                    </div>	
                    <?php endforeach; ?>

                </div>
                <div class="col-md-4">
                     <?php foreach ($posts_categories as $post_category): ?>
                    <div class="style" style='width: 100%; clear:both;padding: 0 0 10px 0px;'>
                        <a class="pic-wd" href="#">
                            <img src="<?php echo $post_category['post_category_img'] ?>">
                        </a>
                        <div class="text-wd" style='overflow: hidden;'>
                            <h6><?php echo $post_category['post_category_name'] ?></h6>
                            <p><?php echo $post_category['post_category_desription'] ?></p>
                        </div>
                    </div>
                     <?php endforeach; ?>
                </div>
            </div>
        </div>
    </body>
</html>
