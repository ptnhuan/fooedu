<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2018.less', 'css/2018.css');
        ?>
        <link href="css/2018.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <?php
                        include './2018-content.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>