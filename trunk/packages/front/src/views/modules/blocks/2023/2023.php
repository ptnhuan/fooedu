<!doctype html>

<html>

    <head>
        <title></title>
        <meta charset="utf-8">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compilefile('less/2023.less', 'css/2023.css');
        ?>
        <link href="css/2023.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <?php
            include './2023-content.php';
        ?>
    </body>

</html>