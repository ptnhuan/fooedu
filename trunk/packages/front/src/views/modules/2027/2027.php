<!DOCTYPE html>
<html>

    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2027.less', 'css/2027.css');
        ?> 
        <link href="css/2027.css" rel="stylesheet" type="text/css"/>
        
    </head> 

    <body> 
        <?php 
            include './2027-content.php';
        ?>
    </body>
</html>