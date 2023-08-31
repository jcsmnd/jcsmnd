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
    <link rel="stylesheet" href="/assets/styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/assets/styles/fontawesome/all.css">
    <link rel="stylesheet" href="/assets/styles/index.css">
    <script src="/assets/scripts/jquery-3.5.1.min.js"></script>
    <script src="/assets/scripts/bootstrap/bootstrap.bundle.js"></script>
    <script src="/assets/scripts/gsap/gsap.min.js"></script>
    <script src="/assets/scripts/index.js"></script>
</head>
<body>
<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style="padding-top: 0; padding-bottom: 0;">
    <a class="navbar-brand" href="/">JCSMND.COM</a>
</nav>
<div class="jumbotron text-center">
    <div id="notify">
        <i class="fas fa-radiation-alt"></i> Server Migration is in progress from ubuntu 18.04 to 22.04
    </div>
    <p class="img"><img id="tiger" src="assets/images/profile01.png" alt="jcsmnd.com" class="rounded-circle"></p>
    <p><h2 class="hide"><i class="far fa-smile"></i> Hello!</h2></p> 
    <p><h4 class="hide">Welcome to jcsmnd website</h4></p>
    <p>If you have any questions or inquiries, contact at <a href="mailto:jcsmnd@gmail.com">HERE</a></p>
    <p>Here is my <i class="fab fa-linkedin"></i> URL: <a href="https://www.linkedin.com/in/myungsik-k/" target="_blank">HERE</a></p>
    <p><span>Please feel free to browse through my portfolios below&nbsp;<i class="fa fa-solid fa-arrow-down"></i></span></p>
</div>
<div class="container">
    <div id="rotate" class="row text-center">
        <div class="col-sm-3 anm">
            <a href="https://github.com/jcsmnd" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title=""><i class="fab fa-github icn"></i>Github</a>
        </div>
        <div class="col-sm-3 anm">
            <a href="https://jcsmnd.github.io" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="angular"><i class="fab fa-angular icn"></i>Angular</a>  
        </div>
        <div class="col-sm-3 anm">
            <a href="https://blog.jcsmnd.com/" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="Up to date"><i class="fab fa-wordpress icn"></i>Wordpress</a>
        </div>
        <div class="col-sm-3 anm">
            <a href="/wordpress" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="AWS VPC EC2(Windows Server 2016) => AWS LIGHTSAIL(Ubuntu Custom Server 18.04, wordpress - php 7, mysql 5.7)"><i class="fab fa-wordpress-simple icn"></i>Wordpress (old)</a>
        </div>
        <div class="col-sm-3 anm">
            <a href="/laravel" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="PWA WIP"><i class="fab fa-laravel icn"></i>Laravel</a> 
        </div>
        <div class="col-sm-3 anm">
            <a href="/quasar" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="WIP"><img class="doc-header__logo-img icn" src="https://cdn.quasar.dev/logo-v2/svg/logo-dark.svg" alt="Quasar Logo" width="16" height="16">Quasar</a> 
        </div>
        <div class="col-sm-3 anm">
            <a href="/projects/demo01" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="US Stock tracker - finnhub API with python cgi WIP"><i class="fab fa-python icn"></i>Python</a> 
        </div>
        <div class="col-sm-3 anm">
            <a href="/projects/demo02" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="RESTful - Github API with Vanilla JavaScript"><i class="fab fa-github icn"></i>Github API</a> 
        </div>
        <div class="col-sm-3 anm">
            <a href="/nodejs" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title=".io game - node.js WIP"><i class="fab fa-node icn"></i>Node.js</a> 
        </div>
        <div class="col-sm-3 anm">
            <a href="/projects/demo06" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title="Unity3D WebGL"><i class="fab fa-unity icn"></i>Unity3D WebGL</a>
        </div>
        <div class="col-sm-3 anm">
            <a href="/nextcloud" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" target="_blank" rel="noopener noreferrer" title=""><img src="https://nextcloud.com/wp-content/uploads/2023/02/logo_nextcloud_white.svg" class="custom-logo entered icn lazyloaded" alt="Nextcloud logo" decoding="async" data-lazy-src="https://nextcloud.com/wp-content/uploads/2023/02/logo_nextcloud_white.svg" data-ll-status="loaded" width="16" height="16">Nextcloud</a>
        </div>
        <div class="col-sm-3 anm">
            <a href="/" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" rel="noopener noreferrer" title="TBD"><i class="fas fa-flask icn"></i>Homelab</a>
        </div>
        <div class="col-sm-3 anm">
            <a href="/" class="btn btn-primary btn-block disabled" role="button" data-toggle="tooltip" data-placement="bottom" rel="noopener noreferrer" title="TBD"><img class="XNo5Ab icn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAASFBMVEVHcEw3u+lD0f1B0P00uOtG0v1F0f1B0P1B0P1E0f1G0f1B0P1A0f4kvv0evP4txf4evP0YpegGV5wHWZ0NTJUZoeQFV5wDVpvME6UAAAAAGHRSTlMABltpE+3//6OV/ybGxv//7v+X/v/sW2mBerO4AAAAkElEQVR4Ac3QRxKEMBBDUUdyjve/6TSFmIQtb9GOep9kdZ82mHUqNO2zLMuPFTFHUEa8QhB1BNwz4hKkPSNecZc93LPL62sO7nB+8CbHGv0OsqB/v4I5Cnib3RwFvOuzgMscvJMi5DK4FMzPIuJuQDBOKjx9FuM802JcZlaIS0CK9WBaiPFCJQudLjZsd3L1AlcdDxp3+SgrAAAAAElFTkSuQmCC" style="height:18px;width:18px" alt="" data-atf="1" data-frt="0">Flutter</a>
        </div>
        <div class="col-sm-3 anm">
            <a href="/react" class="btn btn-primary btn-block" role="button" data-toggle="tooltip" data-placement="bottom" rel="noopener noreferrer" title="react"><i class="fab fa-react icn"></i>React</a>
        </div>
    </div>
</div>
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<footer>
    <div class="container-outer">
        <div class="container-inner">
            <div class="container-width">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright">
                    <a href="https://www.tradingview.com" rel="noopener" target="_blank">
                        <span class="blue-text">Quotes</span>
                    </a> by TradingView
                    </div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                    {
                        "symbols": [
                        {
                            "title": "S&P 500",
                            "proName": "FOREXCOM:SPXUSD"
                        },
                        {
                            "title": "Nasdaq 100",
                            "proName": "INDEX:IUXX"
                        },
                        {
                            "title": "EUR/USD",
                            "proName": "FX_IDC:EURUSD"
                        },
                        {
                            "title": "BTC/USD",
                            "proName": "BITFINEX:BTCUSD"
                        },
                        {
                            "title": "ETH/USD",
                            "proName": "BITFINEX:ETHUSD"
                        },
                        {
                            "description": "Tesla",
                            "proName": "NASDAQ:TSLA"
                        },
                        {
                            "description": "Microsoft",
                            "proName": "NASDAQ:MSFT"
                        },
                        {
                            "description": "Apple",
                            "proName": "NASDAQ:AAPL"
                        },
                        {
                            "description": "Google",
                            "proName": "NASDAQ:GOOGL"
                        }
                        ],
                        "colorTheme": "dark",
                        "isTransparent": true,
                        "showSymbolLogo": true,
                        "locale": "en"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
    <small id="cr21">© <?php echo date("Y"); ?> jcsmnd.com</small>
</footer>
</body>
</html>