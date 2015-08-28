<?php

header("Access-Control-Allow-Origin: *");
require_once('config.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
 
    <style type="text/css">
    .parrafo{
        text-align: justify;
        text-indent: 1cm;
    }
    p.parrafo:first-letter { text-transform: uppercase; font-size: 1.5em; }
    .MAYUSCULA{
        text-transform: uppercase;
    }
    div.img-cultura{
        background-image: url('./img/');
        background-repeat: no-repeat;
    }
    #video1{
        margin-left: 5%;
        width: 90%;
        min-height:287px;

    }
    div#loader{


  position: absolute;
  top: 0;
  left: 0;
  z-index: 1000;
  width: 100%;
  height: 100%;
        background-color: #201e20;
        /*float: left;*/
        padding-right: 400px;
    }
    span.status{
        float: right;
        text-align:right;
    }
    .sub_titulos{

    background: #fff;
    background: rgba(255,255,255,.5);
    border-radius: 5px;
    box-shadow: 5px 3px 5px rgb(200,200,200);
    font-size: 1.7em;
    font-style: italic;
    margin: 0 auto;
    padding: 15px 0;
    text-align: center;
    text-shadow: 2px 2px 4px rgb(0, 0, 0);
    /* kirobold kiroextralight*/
    font-family: "kirobold";
    
    width: 40%;
    }
    </style>

</head>

<!-- sticky-nav -->
<body class="products-waterway" >

<header class="main-nav">



    <div id="lwtOverlay"></div>

    <?php require_once('form_contacto.php');?>

    <div class="nav-bg"></div>

    <div class="container">
        <div class="row">

            <div class="col-xs-4 col-sm-3 col-xs-offset-1 col-sm-offset-0 logo">
                <a href="<?php echo $dir_base;?>">
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
                  <!--  <a class="" href="../../our-company/index.html">Quienes Somos</a> -->
                    <a class="" href="#somos">Quienes Somos</a>
                    <div class="red-bar"></div>
                </div>
                <div class="col-xs-3 <?php if($page=='portafolio'){echo "active";}?>">
                    <a class="" href="#portafolio">Portafolio</a>
                    <!-- <a class="" href="../../careers/index.html">Portafolio</a>-->
                    <div class="red-bar"></div>
                </div>
                <div class="col-xs-3 <?php if($page=='clientes'){echo "active";}?>">
                    <a class="" href="#clientes">Clientes</a>
                    <!-- <a class="" href="../../insights/index.html">Clientes</a> -->
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
                <a href="#"> 
                <!-- <a href="../stratos/index.html"> -->
                    <div class="col-xs-6 product-wrapper">
                        <div class="bg-img" style="background-image: url(<?php echo $dir_img;?>elements-nav.jpg)">
                            <div class="vertical-align">
                                <h2>Azprotec<span> Eventos<span class="sup"></span></h2>
                                <p>Muy pronto.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</header>

<!-- Fondo de servicios MOBIL-->
<div class="hamburger-nav hidden-md hidden-lg">
    <ul>
        <li class="products">
            <a href="#">Our Products</a>
            <ul>
                <li>
                    <a href="index.php">Azprotec<span> Servicios</span></a>
                </li>
                <li>
                    <a href="#">Azprotec<span> Eventos</span></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Our Company</a>
        </li>
        <li>
            <a href="#">Careers</a>
        </li>
        <li>
            <a href="#">Insights</a>
        </li>
    </ul>
    <div class="social-links">
        <a href="https://www.facebook.com/Azprotec" target="_blank"><img src="<?php echo $dir_img;?>facebook.png"></a>
        <a href="https://twitter.com/Azprotec" target="_blank"><img src="<?php echo $dir_img;?>twitter.png"></a>
        <a href="https://www.linkedin.com/company/Azprotec" target="_blank"><img src="<?php echo $dir_img;?>linkedin.png"></a>
    </div>
</div>
<!-- FIN de Fondo de servicios MOBIL-->



<!-- Content Start -->


<?php
        switch ($page) {
            case 'servicios':
                echo '<main role="main" class="body">';
                require_once ('servicios/sense/baner_principal_servicios.php');
                require_once ('servicios/sense/slider_galeria_servicios.php');
                echo '</main>';
                break;

            default:
                # code...
                break;
        }
    ?>
