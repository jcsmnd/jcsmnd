<!-- disable vscode default extension for lightsail ssh remote cpu and memory consumption => @builtin typescript -->
<?php
<<<<<<< HEAD
include_once 'pdo.php';
$db = new pdoDB;
=======
    require 'db_config.php';
    $con_success = 0;
    try {
        $db = new PDO($db_info['DB_SERVER'].';dbname='.$db_info['DB_NAME'], $db_info['DB_USER'], $db_info['DB_PW']);
        $con_success = 1;
    } catch(PDOException $e) {
        $con_success = 0;
    }
    if($con_success === 1 && !isset($_SESSION)){
        $ts = new DateTime("now", new DateTimeZone('America/Los_Angeles'));
        $ts = $ts->format('Y-m-d H:i:s');
        $ip = getenv('HTTP_CLIENT_IP')?:
        getenv('HTTP_X_FORWARDED_FOR')?:
        getenv('HTTP_X_FORWARDED')?:
        getenv('HTTP_FORWARDED_FOR')?:
        getenv('HTTP_FORWARDED')?:
        getenv('REMOTE_ADDR');
        $get_browser = json_encode(get_browser(null, true));
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $stmt = $db->prepare("INSERT INTO access_log (ip_addr, get_browser, user_agent, ts) VALUES (:ip_addr, :get_browser, :user_agent, :ts)");
        $stmt->bindParam(':ip_addr', $ip);
        $stmt->bindParam(':get_browser', $get_browser);
        $stmt->bindParam(':user_agent', $user_agent);
        $stmt->bindParam(':ts', $ts);
        $result = $stmt->execute();
    }
>>>>>>> aa7c7b6ad00d4a394ee7002930573dcbecaff38d
?>

<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
    <title>JCSMND <?php echo date("Y");?></title>
=======
    <title>JCSMND 2022</title>
>>>>>>> aa7c7b6ad00d4a394ee7002930573dcbecaff38d
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
    <p class="img"><img id="tiger" src="assets/images/31255509.png" alt="Towson Tigers" class="rounded-circle"></p>
    <p><h2 class="hide"><i class="far fa-smile"></i> Hello!</h2></p> 
    <p><h4 class="hide">I'm web developer.</h4></p>
</div>
<div class="container">
    <div id="rotate" class="row text-center">
        <div class="col-sm-3">
            <a href="https://blog.jcsmnd.com" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="AWS VPC EC2(Windows Server 2016) => AWS LIGHTSAIL(Ubuntu Custom Server 18.04, wordpress - php 7, mysql 5.7)">WP Blog</a>
        </div>
        <div class="col-sm-3">
            <a href="https://github.com/jcsmnd" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="Here are some samples of the projects I worked on during attending the school or internship including java, asp.net, laravel, etc..">Github</a>
        </div>
        <div class="col-sm-3">
            <a href="https://jcsmnd.github.io" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="2nd blog using Github Pages - Markdown">Github.io</a>  
        </div>
        <div class="col-sm-3">
            <a href="/laravel" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="Laravel">Laravel</a> 
        </div>
        <div class="col-sm-3">
            <a href="/projects/demo01" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="US Stock tracker - finnhub API with python cgi">Demo1</a> 
        </div>
        <div class="col-sm-3">
            <a href="/projects/demo02" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" title="RESTful - Github API with Vanilla JavaScript">Demo2</a> 
        </div>
        <div class="col-sm-3">
            <a href="/nodejs" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title=".io game - node.js">Demo3</a> 
        </div>
        <div class="col-sm-3">
            <a href="/projects/demo04" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" title="Unity3D WebGL">Demo4</a>
        </div>
        <div class="col-sm-3">
            <a href="https://www.linkedin.com/in/myungsik-k-3b5453133/" class="btn btn-primary btn-block" role="button">LinkedIn</a>
        </div>
    </div>
</div>
<!-- <div class="container">
	<div class="row justify-content-center">
        <img src="https://via.placeholder.com/900x300" class="img-fluid rounded mb-3" alt="">
        <img src="https://via.placeholder.com/900x300" class="img-fluid rounded mb-3" alt="">
        <img src="https://via.placeholder.com/900x300" class="img-fluid rounded mb-3" alt="">		
	</div>
</div> -->
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<!-- <footer class="footer">
        <audio id="musicPlayer" controls autoplay loop>
            <source src="assets/music/Deep Hat - Vibe Tracks.mp3"  type="audio/mpeg">
        </audio>
</footer> -->
</body>
</html>