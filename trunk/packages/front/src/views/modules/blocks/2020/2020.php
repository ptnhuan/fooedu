<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2020.less', 'css/2020.css');
        ?>
        <link href="css/2020.css" rel="stylesheet" type="text/css" />
       
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <?php
                            include './2020-content.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>