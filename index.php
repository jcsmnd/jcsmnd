<!-- disable vscode default extension for lightsail ssh remote cpu and memory consumption => @builtin typescript -->
<?php
include_once 'pdo.php';
$db = new pdoDB;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>JCSMND <?php echo date("Y");?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/styles/fontawesome/all.css">
    <link rel="stylesheet" href="assets/styles/index.css">
    <script src="assets/scripts/jquery-3.5.1.min.js"></script>
    <script src="assets/scripts/bootstrap/bootstrap.bundle.js"></script>
    <script src="assets/scripts/gsap/gsap.min.js"></script>
    <script src="assets/scripts/index.js"></script>
</head>
<body>
<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style="padding-top: 0; padding-bottom: 0;">
    <a class="navbar-brand" href="/">JCSMND.COM</a>
</nav>
<div class="jumbotron text-center">
    <p class="img"><img id="tiger" src="assets/images/tiger.png" alt="Towson Tigers" class="rounded-circle"></p>
    <p><h2 class="hide"><i class="far fa-smile"></i> Hello!</h2></p> 
    <p><h4 class="hide">Welcome to my website.</h4></p>
    <p><span>Please feel free to browse through my portfolios below&nbsp;<i class="fa fa-solid fa-arrow-down"></i></span></p>
</div>
<div class="container">
    <div id="rotate" class="row text-center">
        <div class="col-sm-3">
            <a href="https://jcsmnd.github.io" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="How cool it is">Github.io</a>  
        </div>
        <div class="col-sm-3">
            <a href="/blog" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="AWS VPC EC2(Windows Server 2016) => AWS LIGHTSAIL(Ubuntu Custom Server 18.04, wordpress - php 7, mysql 5.7)">Wordpress</a>
        </div>
        <div class="col-sm-3">
            <a href="/laravel" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="Love laravel don't ya?">Laravel</a> 
        </div>
        <div class="col-sm-3">
            <a href="/projects/demo01" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="US Stock tracker - finnhub API with python cgi">Python</a> 
        </div>
        <div class="col-sm-3">
            <a href="/projects/demo02" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="RESTful - Github API with Vanilla JavaScript">Demo4 </a> 
        </div>
        <div class="col-sm-3">
            <a href="/nodejs" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title=".io game - node.js">Node.js</a> 
        </div>
        <div class="col-sm-3">
            <a href="/projects/demo04" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="Unity3D WebGL">Demo 6</a>
        </div>
        <div class="col-sm-3">
            <a href="/nextcloud" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="">Nextcloud</a>
        </div>
        <div class="col-sm-3">
            <a href="https://github.com/jcsmnd" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="">Github</a>
        </div>
    </div>
</div>
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
</body>
</html>