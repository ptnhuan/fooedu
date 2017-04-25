<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?> 

        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head> 
    <body> 
        <div class="homepage">
            <!--menu-->
            <?php include 'modules/ie-module-2.php'; ?>
            <!--slide show-->
            <?php include 'modules/ie-module-6.php'; ?>
            <!--ours services-->
            <?php include 'modules/ie-module-1.php'; ?>
            
            <?php include 'modules/ie-module-11.php'; ?>
            <!--student form-->
            <?php include 'modules/ie-module-10.php'; ?>
            <!--Courses Topic-->
            <?php include 'modules/ie-module-7.php'; ?>
            <!--Our Teachers-->
            <?php include 'modules/ie-module-3.php'; ?>
            <!--popular posts-->
            <?php include 'modules/ie-module-8.php'; ?>
            <!--module-4-->
            <?php include 'modules/ie-module-4.php'; ?>
            <!--Read Our Testimonials-->
            <?php include 'modules/ie-module-9.php'; ?>
            <!--ie-module5-->
            <?php include 'modules/ie-module-5.php'; ?>
            <!--footer-->
            <?php include 'modules/ie-module-12.php'; ?>
    </body>
</html>