<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2019.less', 'css/2019.css');
        ?>
        <link href="css/2019.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <?php
                            include './2019-content.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>