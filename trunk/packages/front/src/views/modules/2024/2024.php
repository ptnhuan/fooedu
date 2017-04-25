<!doctype html>

<html>

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compilefile('less/2024.less', 'css/2024.css');
        ?>
        <link href="css/2024.css" rel="stylesheet" type="text/css" />
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/jquery.easy-pie-chart.js" type="text/javascript"></script>
        
    </head>

    <body>
       <?php
       include './2024-content.php';
       ?>

    </body>

</html>