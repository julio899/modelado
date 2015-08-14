
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
                        <li data-event="pageSliderChange" data-target="three">03 How it works</li>
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
                        <div class="globe-wrapper col-xs-12 text-center">
                            <img class="margin-center img-responsive" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/products_globe2.png">
                            <canvas id="satellite-orbit" width="400" height="225"></canvas>
                        </div>

                        <div class="calculator-slider-section no-padding col-sm-8 col-sm-offset-2 col-xs-10
                        col-xs-offset-1">
                            <div class="calculator-slider" data-name="calculator-slider">
                                <div class="calculator-slider-progress"></div>
                                <div class="calculator-slider-handle"></div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="row clearfix value-container">
                                <div class="calculator-value color-teal text-center col-xs-4">
                                    <span id="calculator-value-satellites-sense">20</span>
                                    <small>Satellites in orbit</small>
                                </div>
                                <div class="calculator-value middle-value color-teal text-center col-xs-4">
                                    <span id="calculator-value-time-sense">14.4</span>
                                    <small>Revisit time in minutes.</small>
                                </div>
                                <div class="calculator-value color-red text-center col-xs-4">
                                    <span id="calculator-value-improvement-sense">24</span><span class="x">x</span>
                                    <small>
                                        Better than today’s solutions.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-sm-offset-1 product-text-lockup">

                        <h2 class="name">spire&nbsp;<span>sense</span><span class="sup">&#8482;</span></h2>
                        <p class="number">02</p>
                        <p class="subtitle">What it does</p>

                        <p>Spire Sense provides the most frequently refreshed global ship tracking data in the industry, providing never-before-seen insights into problems like dark targets through partnerships with high resolution imaging and data fusion partners. Whether your use case involves simple geofencing or using data with pattern recognition for Illegal, Unreported, and Unregulated (IUU) fishing detection, we can configure [Sense] to meet your needs. Access can be configured through an easy to implement API.</p>

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
                                <img class="opacity-3" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-1-bw.jpg" alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-1.jpg" alt=""/>
                                </div>
                            </li>
                            <li data-title="50 miles">
                                <img class="opacity-3" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-2-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-2.jpg" alt=""/>
                                </div>
                            </li>
                            <li data-title="$6B/yr">
                                <img class="opacity-3" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-3-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="
                                    https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-3.jpg" alt=""/>
                                </div>
                            </li>
                            <li data-title="$12B/yr">
                                <img class="opacity-3" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-4-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="
                                    https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-4.jpg" alt=""/>
                                </div>
                            </li>
                            <li data-title="30+ million">
                                <img class="opacity-3" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-5-bw.jpg"
                                     alt=""/>
                                <div class="vertical-align">
                                    <img class="img-responsive" src="
                                    https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/sense-slideshow/slide-5.jpg" alt=""/>
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
                                <h3>30+ million</h3>
                            </a>
                            <a class="next" href="index.html#">
                                <span class="icon-wrap">
                                    <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </span>
                                <h3>50 miles</h3>
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
                        <h2 class="name">spire&nbsp;<span>sense</span><span class="sup">&#8482;</span></h2>
                        <p class="number">03</p>
                        <p class="subtitle">How it works</p>

                        <h4 class="gamma">Ship Tracking</h4>
                        <p class="padding-bottom40">A mere 50-nautical-miles after a ship leaves port, the signal from its AIS transponder (required to be on-board by International Maritime Law) becomes blocked by the curvature of the Earth. Our satellites, operating in Low Earth Orbit, provide The Ultimate High Ground to capture and relay critical information from every ship — no matter where it is — to the decision makers that need it most.</p>

                        <h4 class="gamma">Sensor Fusion</h4>
                        <p>Standard AIS data isn't the end of Sense, it is simply the beginning. Through fusing AIS and weather data, or fusing AIS with other space-based and terrestrial data providers, Sense is designed to deliver a highly contextual stream of data to tackle the truly complex problems that global organizations face day after day. For those that have a very particular need, please contact us. We are happy to evaluate additional data streams that can be fused with Sense.</p>

                    </div>
                </div>
            </div>
        </section>

        <section class="module case-studies">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 text-center">
                        <h2 class="gamma">Case Studies</h2>
                        <p class="delta">This is how our customers use our data.</p>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 cases text-center">
                        <div class="col-xs-3 case-1 active" data-target=".mining" data-event="caseStudiesChange">
                            <div></div>
                            <span>Mining</span>
                            <img class="img-responsive margin-center grey" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/mine-grey.png" />
                            <img class="img-responsive margin-center red" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/mine-red.png" />
                        </div>
                        <div class="col-xs-3 case-2" data-target=".government" data-event="caseStudiesChange">
                            <div></div>
                            <span>Government</span>
                            <img class="img-responsive margin-center grey" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/gov-grey.png" />
                            <img class="img-responsive margin-center red" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/gov-red.png" />
                        </div>
                        <div class="col-xs-3 case-3" data-target=".portOperations" data-event="caseStudiesChange">
                            <div></div>
                            <span>Port Operations</span>
                            <img class="img-responsive margin-center grey" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/boat-grey.png" />
                            <img class="img-responsive margin-center red" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/boat-red.png" />
                        </div>
                        <div class="col-xs-3 case-4" data-target=".arcticShipping" data-event="caseStudiesChange">
                            <div></div>
                            <span>Arctic Shipping</span>
                            <img class="img-responsive margin-center grey" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/ship-grey.png" />
                            <img class="img-responsive margin-center red" src="https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/ship-red.png" />
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
                                    <p>In the past, ship tracking data wasn't good or abundant enough for a some companies or industries to warrant purchasing. Companies that use contracted vessels, such as mining companies or retailers, ship items and commodities around the globe with little or no insight into where there goods are in the ocean. For the first time in history, Spire will provide enough data to provide those corporations access to near-realtime position of ships carrying the lifeblood of their business.</p>
                                </div>
                                <div class="image-1" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/mining-1.jpg)"></div>
                            </div>

                            <div class="col-xs-4 no-padding hidden-xs">
                                <div class="image-2" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/mining-2.jpg)"></div>
                                <div class="image-3" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/mining-3.jpg)"></div>
                            </div>
                        </div>
                        <div class="government case-2">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="copy">
                                    <p>Law requires fishing vessels carry AIS transponders. Many fishing boats which fish illegally, simply turn off their transponders. The reduced revisit time of Spire satellites allows for the detection of both time and position of ships when they disable their tracking equipment. Authorities with acess to Spire Sense will know in near-real time the location of illegal fishing.</p>
                                </div>
                                <div class="image-1" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/government-1.jpg)"></div>
                            </div>

                            <div class="col-xs-4 no-padding hidden-xs">
                                <div class="image-2" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/government-2.jpg)"></div>
                                <div class="image-3" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/government-3.jpg)"></div>
                            </div>
                        </div>
                        <div class="portOperations case-3">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="copy">
                                    <p>In less developed countries, a lack of highly developed port infrastructure means that authorities rely on incomplete AIS data. Many small ports, which rely on shipping commerce as an economic enabler, will be coming online with Spire Sense. The better management means reduced delays, less accidents, and economic growth for areas that need it most.</p>

                                </div>
                                <div class="image-1" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/portoperations-1.jpg)"></div>
                            </div>

                            <div class="col-xs-4 no-padding hidden-xs">
                                <div class="image-2" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/portoperations-2.jpg)"></div>
                                <div class="image-3" style="background-image: url(https://d3fjoi8mc83q5y.cloudfront.net/static/base/img/case-study-images/portoperations-3.jpg)"></div>
                            </div>
                        </div>
                        <div class="arcticShipping case-4">
                            <div class="col-xs-12 col-sm-8 no-padding">
                                <div class="copy">
                                    <p>Arctic shipping routes, which continue to grow in traffic due to reduced sea ice, are a perilous way of crossing the ocean. Search and rescue is difficult and cleanup resources for incidents are hours - if it not days - away. Coordinating and logistics in this region are ever more important as volume grows. We give our customers operating in this region the added control to make good - and safe - decisions.</p>
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
                    <li><span>CALL US</span> | <a href="tel:+1 123-100-0000">415-356-3400 </a></li>
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
        Spire.satalliteSlider_init();
        Spire.sense_init();
    </script>


</body>
</html>
