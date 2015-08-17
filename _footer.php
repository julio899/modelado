
<div class="hamburger-nav hidden-md hidden-lg">
    <ul>
        <li class="products">
            <a href="index.html">Our Products</a>
            <ul>
                <li>
                    <a href="index.html">spire&nbsp;<span>sense</span></a>
                </li>
                <li>
                    <a href="../stratos/index.html">spire&nbsp;<span>stratos</span></a>
                </li>
            </ul>
        </li>
        <li>
            <a href="../../our-company/index.html">Our Company</a>
        </li>
        <li>
            <a href="../../careers/index.html">Careers</a>
        </li>
        <li>
            <a href="../../insights/index.html">Insights</a>
        </li>
    </ul>
    <div class="social-links">
        <a href="https://www.facebook.com/Azprotec" target="_blank"><img src="<?php echo $dir_img;?>facebook.png"></a>
        <a href="https://twitter.com/Azprotec" target="_blank"><img src="<?php echo $dir_img;?>twitter.png"></a>
        <a href="https://www.linkedin.com/company/Azprotec" target="_blank"><img src="<?php echo $dir_img;?>linkedin.png"></a>
    </div>
</div>

<!-- Content Start -->
<main role="main" class="body">



    <div class="svg-wrap">
        <svg width="32" height="32" viewBox="0 0 32 32">
            <path id="arrow-left" d="M28.4,12.9H11.1l6.7-6.7C19,5,19,3,17.8,1.8c-1.2-1.2-3.2-1.2-4.4,0l-12,12c-1.2,1.2-1.2,3.2,0,4.4l12,12 c0.6,0.6,1.4,0.9,2.2,0.9c0.8,0,1.6-0.3,2.2-0.9c1.2-1.2,1.2-3.2,0-4.4l-6.7-6.7h17.3c1.7,0,3.1-1.4,3.1-3.1   C31.5,14.3,30.1,12.9,28.4,12.9z" />
        </svg>
        <svg width="64" height="64" viewBox="0 0 64 64">
            <path id="arrow-right" d="M3.6,19.1h17.3l-6.7,6.7C13,27,13,29,14.2,30.2c1.2,1.2,3.2,1.2,4.4,0l12-12c1.2-1.2,1.2-3.2,0-4.4l-12-12 c-0.6-0.6-1.4-0.9-2.2-0.9c-0.8,0-1.6,0.3-2.2,0.9C13,3,13,5,14.2,6.2l6.7,6.7H3.6c-1.7,0-3.1,1.4-3.1,3.1   C0.5,17.7,1.9,19.1,3.6,19.1z" />
        </svg>
    </div>

<?php
        switch ($page) {
            case 'servicios':
                require_once ('servicios/sense/baner_principal_servicios.php');
                break;

            default:
                # code...
                break;
        }
    ?>

    <section class="module text-center" id="page-slider">

        <div class="container vertical-align">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <ul class="slider lavaLamp">
                        <li class="active current" data-event="pageSliderChange" data-target="one">Nuestros Servicios</li>
                        <li data-event="pageSliderChange" data-target="two">Metas Realizadas</li>
                        <li data-event="pageSliderChange" data-target="three">Como Trabajamos</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <div class="parallax-container">

        <section class="module padding-top80 sliderUpdate bg-b97" id="one">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 product-text-lockup">
                        <h2 class="name">Azprotec&nbsp;</h2>
                        <p class="number"><span>Servicios</span></p>
                        <p class="subtitle">Unicos</p>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <p class="padding-top20">Nos encargamos del diseño, instalación y operación de los sistemas que ofrecemos en conjunto con la capacidad y creatividad de nuestro personal técnico, adecuándonos de manera funcional a cualquier necesidad, asegurándonos de que su evento resulte como lo planeó.</p>
                    </div>
                    <div class="col-xs-12 boat-wrapper hidden-xs">
                        <img class="img-responsive" src="<?php echo $dir_img;?>serv-med-1.jpg" />
                        <!-- <img class="img-responsive boat" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-boat.png" />

                        <div class="left points">
                            <div class="hover-1">
                                <div class="boat-hover" data-target="info-L1">
                                    <div class="point"><div class="inner-point"></div></div>
                                    <span></span>
                                    <h4>Illegal Fishing</h4>
                                </div>
                            </div>
                            <div class="hover-2">
                                <div class="boat-hover" data-target="info-L2">
                                    <h4>Trade Monitoring</h4>
                                    <span></span>
                                    <div class="point"><div class="inner-point"></div></div>
                                </div>
                            </div>
                            <div class="hover-3">
                                <div class="boat-hover" data-target="info-L3">
                                    <div class="point"><div class="inner-point"></div></div>
                                    <span></span>
                                    <h4>Piracy</h4>
                                </div>
                            </div>
                        </div>
                        <div class="left info">
                            <div class="info-left" id="info-L1">
                                <h3>Illegal Fishing</h3>
                                <p class="padding-bottom20">Illegal, unreported, and unregulated fishing (IUU) puts incredible pressure on fish stocks and significantly distorts global markets. Estimated at nearly 20% of annual global seafood catch or $23B, IUU also hurts many of the world’s poorest countries where communities rely on fishing for food, livelihood and economic stimulus.</p>
                                <p>Poachers are killing tens of thousands of marine animals as bycatch and destroying delicate habitats through unregulated and harmful fishing practices. Our data augments detection and helps promote fairer seas for everyone.</p>
                            </div>
                            <div class="info-left" id="info-L2">
                                <h3>Trade Monitoring</h3>
                                <p>Virtually all global trade transits through areas of the planet otherwise ignored by traditional remote sensing, and over 80% via shipping containers on oceangoing vessels. Our technology can deliver reliable data on every ship in every ocean, every hour. Imagine knowing with certainty where the global economy is headed.</p>
                            </div>
                            <div class="info-left" id="info-L3">
                                <h3>Piracy</h3>
                                <p>Piracy is a very real, serious concern in many parts of the world, and response time is slow. A pirate’s first action is to disable ship tracking. Detecting this change — or loss of tracking signal — is key to an early warning and response.</p>
                            </div>


                        </div>
                        <div class="right points">
                            <div class="hover-1">
                                <div class="boat-hover" data-target="info-R1">
                                    <div class="point"><div class="inner-point"></div></div>
                                    <span></span>
                                    <h4>Search & Rescue</h4>
                                </div>
                            </div>
                            <div class="hover-2">
                                <div class="boat-hover" data-target="info-R2">
                                    <h4>Insurance</h4>
                                    <span></span>
                                    <div class="point"><div class="inner-point"></div></div>
                                </div>
                            </div>
                            <div class="hover-3">
                                <div class="boat-hover" data-target="info-R3">
                                    <div class="point"><div class="inner-point"></div></div>
                                    <span></span>
                                    <h4>Maritime Domain Awareness</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right info">
                            <div class="info-right" id="info-R1">
                                <h3>Search & Rescue</h3>
                                <p>Each minute lost searching for a ship in distress can result in lives lost, especially in the wake of deadly storms. Linking more precise ship tracking with teams closest to the accident could decrease time spent searching and greatly increase chances for survival.</p>
                            </div>
                            <div class="info-right" id="info-R2">
                                <h3>Insurance</h3>
                                <p>When two vessels collide or an oil spill occurs, there is often very little insight into what happened, or into which vessel is at fault. With more frequent detection of ship locations, insurance providers can more accurately rebuild a picture of the accident and more quickly assign responsibility, avoid unnecessary claims, and better serve claimants.</p>
                            </div>
                            <div class="info-right" id="info-R3">
                                <h3>Maritime Domain Awareness</h3>
                                <p>A mere twenty percent of our world is connected in an ever-evolving network of signals. It is understood, and it is secure. Unfortunately, most of our planet is covered by vast oceans that are all but severed from the modern world. Spire finally brings near real-time understanding to the most remote three quarters of our planet.</p>
                            </div>


                        </div>
                        -->
                    </div>
                    <div class="col-xs-12 no-padding hidden-sm hidden-md hidden-lg">
                        <img class="img-responsive" src="<?php echo $dir_img;?>serv-med-1-mobile.png" />
                    </div>
                </div>
            </div>
        </section>

        <section class="module sliderUpdate" id="two">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 no-padding">


                        <div class="col-xs-12">
                            <div class="row clearfix value-container">
                                <div class="calculator-value color-teal text-center col-xs-6">
                                    <small>Más de </small>
                                    <span id="calculator-value-satellites-sense">30</span>
                                    <small>Años de Experiencia</small>
                                </div>
                                <div class="calculator-value middle-value color-teal text-center col-xs-6">
                                    <small>Servicios de </small>
                                    <span id="calculator-value-time-sense">Calidad</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-sm-offset-1 product-text-lockup">

                        <h4 class="gamma">En Azprotec <span> entregamos el 100% para lograr tu maxima</span></h4>
                        <p class="number">Satisfacción</p>
                        <p class="subtitle">Son ustedes nuestra prioridad.</p>

                        <p>Implementamos nuestra capacidad y experiencia para brindarte, la mejor experiencia y calidad de servicio, brindamos soluciones amplias para tus expectativas y necesidades.</p>

                    </div>
                </div>
            </div>
        </section>

        <section class="module slide-show">
            <div class="container-fluid">
                <div class="row">
                    <div id="component" class="component component-fullwidth fxPressAway">
                        <ul class="itemwrap">
                            <li class="current" data-title="90%">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-1-bw.jpg" alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-1.jpg" alt=""/>
                                </div>
                            </li>
                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-2-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-2.jpg" alt=""/>
                                </div>
                            </li>
                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-3-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="
                                    <?php echo $dir_img."servicios/slider";?>/slide-3.jpg" alt=""/>
                                </div>
                            </li>
                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-4-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-4.jpg" alt=""/>
                                </div>
                            </li>

                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-5-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-5.jpg" alt=""/>
                                </div>
                            </li>

                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-6-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-6.jpg" alt=""/>
                                </div>
                            </li>

                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-7-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-7.jpg" alt=""/>
                                </div>
                            </li>

                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-8-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-8.jpg" alt=""/>
                                </div>
                            </li>

                            <li data-title="Azprotec">
                                <img class="opacity-3" src="<?php echo $dir_img."servicios/slider";?>/slide-9-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="<?php echo $dir_img."servicios/slider";?>/slide-9.jpg" alt=""/>
                                </div>
                            </li>
                        </ul>
                        <nav class="nav-roundslide">
                            <a class="prev" href="index.html#">
                                <span class="icon-wrap">
                                    <svg class="icon" width="16" height="16" viewBox="0 0 32 32">
                                        <use xlink:href="#arrow-left"></use>
                                    </svg>
                                </span>
                                <h3>Azprotec</h3>
                            </a>
                            <a class="next" href="index.html#">
                                <span class="icon-wrap">
                                    <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </span>
                                <h3>Azprotec</h3>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="module sliderUpdate" id="three">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 satellite-diagram">
                        <img class="img-responsive" src="<?php echo $dir_img;?>sense-graphic.png" />
                    </div>
                    <div class="col-xs-12 col-sm-5 product-text-lockup">
                        <h2 class="name"><span></span></h2>
                        <p class="number">Azprotec</p>
                        <p class="subtitle">Como Trabajamos</p>

                        <h4 class="gamma">Ignovación</h4>
                        <p class="padding-bottom40">Continuamente nos mantenemos, a la vanguardia de las ultimas tecnologias en equipos, funcionalidad y estrategias. Brindamos servicios con la mejor calidad en firmacion como de produccion y efectos de Iluminacion de la mas alta calidad. Equipos de vanguardia a tu disposición. </p>

                        <h4 class="gamma">Experiencias</h4>
                        <p>Nuestros clientes y eventos, hablan por nosotros, dan testimnios de el profecionalismo con el cual trabajamos, su satisfaccion ha sido nuetro mayor logro y reconocimiento consegido.</p>

                    </div>
                </div>
            </div>
        </section>

        <section class="module case-studies">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 text-center">
                        <h2 class="gamma">Nuestros Servicios</h2>
                        <p class="delta">Servicios Azprotec.</p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 cases text-center">
                        <div class="col-xs-3 case-1 active" data-target=".mining" data-event="caseStudiesChange">
                            <div></div>
                            <span>Nosotros</span> <!--
                            <img class="img-responsive margin-center grey" src="<?php echo $dir_img;?>servicios/galeria/icon-gale-1.png" />
                            <img class="img-responsive margin-center red" src="<?php echo $dir_img;?>servicios/galeria/icon-gale-1.png" /> -->
                        </div>
                        <div class="col-xs-3 case-2" data-target=".government" data-event="caseStudiesChange">
                            <div></div>
                            <span>Generadores Electricos</span><!--
                            <img class="img-responsive margin-center grey" src="<?php echo $dir_img;?>servicios/galeria/icon-gale-2.png" />
                            <img class="img-responsive margin-center red" src="<?php echo $dir_img;?>servicios/galeria/icon-gale-2.png" /> -->
                        </div>
                        <div class="col-xs-3 case-3" data-target=".portOperations" data-event="caseStudiesChange">
                            <div></div>
                            <span>Multimedia</span>
                        </div>
                        <div class="col-xs-3 case-4" data-target=".arcticShipping" data-event="caseStudiesChange">
                            <div></div>
                            <span>Equipo y Producción</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 no-padding case-content">
                        <div class="curtains">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="curtain-1"></div>
                                <div class="curtain-2"></div>
                            </div>
                            <div class="col-sm-4 no-padding hidden-xs">
                                <div class="curtain-3"></div>
                                <div class="curtain-4"></div>
                            </div>
                        </div>
                        <div class="mining current case-1">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="copy">
                                <span>Nosotros</span>
                                    <p>Nos encargamos del diseño, instalación y operación de los sistemas que ofrecemos en conjunto con la capacidad y creatividad de nuestro personal técnico, adecuándonos de manera funcional a cualquier necesidad, asegurándonos de que su evento resulte como lo planeó.</p>
                                <span>Esenografia</span>
                                    <p>Contribuimos a la formación de nuevas tendencias escenográficas innovando los elementos visuales que conforman el área de un evento, decorado, accesorios, iluminación y lo audiovisual.</p>
                                </div>
                                <div class="image-1" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/1.jpg)"></div>
                            </div>

                            <div class="col-xs-4 no-padding hidden-xs">
                                <div class="image-2" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/2.jpg)"></div>
                                <div class="image-3" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/3.jpg)"></div>
                            </div>
                        </div>
                        <div class="government case-2">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="copy">
                                    <span>Generadores Electricos</span>
                                    <p>AZPROTEC ofrece soluciones a las necesidades eléctricas mediante la renta de plantas de luz de diferentes capacidades (gasolina o diesel).</p>
                                    <span>AUDIO</span>
                                    <p>Diseñamos y adecuamos los sistemas necesarios para cada tipo de recinto o aforo, ofreciéndole la mejor opción para hacer de su evento un éxito.</p>
                                </div>
                                <div class="image-1" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/4.jpg)"></div>
                            </div>

                            <div class="col-xs-4 no-padding hidden-xs">
                                <div class="image-2" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/5.jpg)"></div>
                                <div class="image-3" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/6.jpg)"></div>
                            </div>
                        </div>
                        <div class="portOperations case-3">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="copy">
                                <span>Multimedia</span>
                                    <p>Ofrecemos diversos servicios de video, multimedia, transmisión y procesamiento de imágenes con la mejor calidad y tecnología y personal capacitado para la instalación y operación de nuestros equipos.</p>
                                    <p>Pantallas de LED, Panorámicas y de Plasma<br>
                                    Proyectores de 1500 hasta 20000 lúmenes<br>
                                    Procesadores de video<br>
                                    Mapping <br>
                                    Desarrollo de Visuales y video grabaciones CCTV</p>
                                </div>
                                <div class="image-1" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/7.jpg)"></div>
                            </div>

                            <div class="col-xs-4 no-padding hidden-xs">
                                <div class="image-2" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/8.jpg)"></div>
                                <div class="image-3" style="background-image: url(<?php echo $dir_img;?>servicios/galeria/9.jpg)"></div>
                            </div>
                        </div>
                        <div class="arcticShipping case-4">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="copy">
                                    <p>En continua innovación, para brindarte la mejor experiencia.</p>
                                </div>
                                <div class="image-1" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/arcticshipping-1.jpg)"></div>
                            </div>

                            <div class="col-xs-4 no-padding hidden-xs">
                                <div class="image-2" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/arcticshipping-2.jpg)"></div>
                                <div class="image-3" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/arcticshipping-3.jpg)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



</main>


<!-- Pie de pagina-->

<footer class="module main-footer">

    <div class="row site-map">
        <div class="container">
            <div class="col-xs-12 col-sm-2 logo">
                <a href="index.html">
                    <img src="<?php echo $dir_img;?>logo2.png">
                </a>
            </div>
            <div class="col-xs-12 col-sm-2">
                <h3><a href="<?php echo $dir_base;?>servicios/sense/index.php">Servicios</a></h3>
                <!-- <h3><a href="products/sense/index.html">Servicios</a></h3> -->
                <ul>
                    <li><a href="<?php echo $dir_base;?>servicios/sense/index.php">Azprotec servicios</a></li>
                    <!-- <li><a href="products/servicios/index.html">Azprotec servicios</a></li> -->
                </ul>
            </div>
            <div class="col-xs-12 col-sm-2">
                <h3><a href="#">Our Company</a></h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Milestones</a></li>
                    <li><a href="#">The Team</a></li>
                    <li><a href="#">Our Offices</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-2">
                <h3><a href="#">Careers</a></h3>
                <ul>
                    <li><a href="#">Our Culture</a></li>
                    <li><a href="#">The Hiring process</a></li>
                    <li><a href="#">Current Openings</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-2">
                <h3><a href="#">Insights Blog</a></h3>
                <ul>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Happenings</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-2 social-icons">
                <ul>
                    <li>© 2015 Azprotec.</li>
                </ul>
                <a href="https://www.facebook.com/Azprotec" target="_blank"><img src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/teal-social/facebook.png"></a>
                <a href="https://twitter.com/Azprotec" target="_blank"><img src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/teal-social/twitter.png"></a>
                <a href="https://www.linkedin.com/company/Azprotec" target="_blank"><img src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/teal-social/linkedin.png"></a>
            </div>
        </div>
    </div>

    <div class="row email-list">
        <div class="container">
            <div class="xs-col-12">
                <ul class="hidden-xs">
                    <li><span>INFO</span> | <a href="mailto:info@azprotec.com">info@azprotec.com</a></li>
                    <li><span>BUSINESS OPPORTUNITIES</span> | <a href="mailto:info@azprotec.com">info@azprotec.com</a></li>
                    <li><span>PRESS</span> | <a href="mailto:press@azprotec.com">press@azprotec.com</a></li>
                    <li><span>CALL US</span> | <a href="tel:+1 771-718-9953">01 (771) 718 99 53</a></li>
                    <li><span><a href="#">VISIT US</a></span></li>
                    <!-- <li><span><a href="our-company/index.html#offices">VISIT US</a></span></li> -->
                </ul>
                <ul class="hidden-sm hidden-md hidden-lg">
                    <li>© 2015 Azprotec.</li>
                </ul>
            </div>
        </div>
    </div>

</footer>


<!--
<script src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/js/main.min.js"></script>
-->

<script src="<?php echo $dir_js;?>main.min.js"></script>
-
<div id="fb-root"></div>


    <script type="application/javascript">
        Spire.slideshowMain_init();
        /*Spire.satalliteSlider_init();*/
        Spire.sense_init();
    </script>


</body>
</html>
