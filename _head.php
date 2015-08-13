<?php
require_once('config.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <title>Azprotec | <?php echo strtoupper($page);?></title>

    <link rel="shortcut icon" href="<?php echo $dir_base;?>favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo $dir_img;?>apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo $dir_img;?>apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $dir_img;?>apple-touch-icon-57-precomposed.png">


    <link rel="stylesheet" href="<?php echo $dir_css;?>site.css"/>



</head>

<!-- sticky-nav -->
<body class="products-waterway">

<header class="main-nav">



    <div id="lwtOverlay"></div>

    <?php require_once('form_contacto.php');?>

    <div class="nav-bg"></div>

    <div class="container">
        <div class="row">

            <div class="col-xs-4 col-sm-3 col-xs-offset-1 col-sm-offset-0 logo">
                <a href="../../index.html">
                    <img class="img-responsive white" src="<?php echo $dir_img;?>logo-white.png" />
                    <img class="img-responsive red" src="<?php echo $dir_img;?>logo.png" />
                </a>
            </div>

            <div class="col-xs-8 col-xs-offset-1 nav-cta hidden-xs hidden-sm">
                <div class="col-xs-3 products-nav <?php if($page=='servicios'){echo "active";}?>">
                    <a class="" href="<?php echo $dir_base."servicios/sense/";?>index.php">SERVICIOS</a>
                    <div class="red-bar"></div>
                </div>
                <div class="col-xs-3 <?php if($page=='somos'){echo "active";}?>">
                    <a class="" href="../../our-company/index.html">Quienes Somos</a>
                    <div class="red-bar"></div>
                </div>
                <div class="col-xs-3 <?php if($page=='portafolio'){echo "active";}?>">
                    <a class="" href="../../careers/index.html">Portafolio</a>
                    <div class="red-bar"></div>
                </div>
                <div class="col-xs-3 <?php if($page=='clientes'){echo "active";}?>">
                    <a class="" href="../../insights/index.html">Clientes</a>
                    <div class="red-bar"></div>
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-xs-offset-4 col-sm-offset-6 hamburger-cta hidden-md hidden-lg">
                <a href="index.html#">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="products-subnav text-center">
                <a href="index.php">
                    <div class="col-xs-6 product-wrapper">
                        <div class="bg-img" style="background-image: url(<?php echo $dir_img;?>fondo_serv.jpg)">
                            <div class="vertical-align">
                                <h2><span>Azprotec</span></h2>
                                <p>Los mejores servicios a tu disposición.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="../stratos/index.html">
                    <div class="col-xs-6 product-wrapper">
                        <div class="bg-img" style="background-image: url(<?php echo $dir_img;?>elements-nav.jpg)">
                            <div class="vertical-align">
                                <h2>Spire&nbsp;<span>Stratos</span><span class="sup">&#8482;</span></h2>
                                <p>High fidelity weather data from the world's<br/> largest constellation of weather
                                    satellites</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</header>
