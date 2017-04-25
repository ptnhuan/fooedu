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
        $less->compileFile('less/2010.less', 'css/2010.css');
        ?> 
        <link href="css/2010.css" rel="stylesheet" type="text/css"/>
    </head> 

    <body> 
        <?php include '../2010/2010-content.php'; ?>
    </body>
</html>