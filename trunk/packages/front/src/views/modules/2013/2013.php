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
        $less->compileFile('less/2013.less', 'css/2013.css');
        ?> 
        <link href="css/2013.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body> 
       <?php include '../2013/2013-content.php'; ?>
    </body>
</html>