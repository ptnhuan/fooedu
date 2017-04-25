<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2012.less', 'css/2012.css');
        ?> 
        <link href="css/2012.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body> 
        <?php include '../2012/2012-content.php'; ?>
    </body>
</html>