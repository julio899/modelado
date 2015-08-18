



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



<script src="<?php echo $dir_js;?>main.min.js"></script>
<script src="<?php echo $dir_js;?>jquery-1.11.3.min.js"></script>

<div id="fb-root"></div>


<?php 
    if($page=='home'){
        ?>


<script src="<?php echo $dir_js;?>preloadjs-0.6.1.min.js"></script>
<script src="<?php echo $dir_js;?>precargarImagenes.js"></script>
<script type="application/javascript">
        function Globe(){
                              this.no=false;

        }


            Spire.home_shipVideo = './img/home-sense-copy.png';
            Spire.home_shipVideoImg = './img/home-sense-copy.png';
            Spire.home_shipImg = './img/home-sense-copy.png';
            Spire.home_init();

              if(Globe.no) {
                Globe.init('https://d3fjoi8mc83q5y.cloudfront.net/static/base/img');
                ParticlePhysics.init();

            } else {
                $('#globe-wrapper, .globe-hand, .globe-controls').hide();
            }
</script>
        <?php
    }else{
        ?>

    <script type="application/javascript">
        Spire.slideshowMain_init();
        /*Spire.satalliteSlider_init();*/
        Spire.sense_init();
    </script>


        <?php
    }
?>
</body>
</html>
