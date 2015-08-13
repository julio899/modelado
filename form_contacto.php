<nav class="nav-roundslide lets-work-together" data-mouse-target="1">
    <a class="expand" href="index.html#">
        <span class="icon-wrap">?</span>
        <h3>Contactanos</h3>
    </a>

    <div id="lets-work-together">
        <div class="row">
            <div class="col-xs-12">
                <a class="close" href="index.html#">
                    <img class="img-responsive" src="<?php echo $dir_img;?>/LWT-x.png" />
                </a>
                <h2>Requiere Informacion</h2>
                <p>Trabajemos Juntos</p>

                <form id="wtform" action="#" method="post">
                    <input type="hidden" name="csrfmiddlewaretoken" value="1d7InsobD6yLKUlEDL0DTup8bxj2etch">
                    <div class="form-group">
                        <input id="form-name" name="form-name" type="text" class="form-control" placeholder="Nombre Completo" required="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre completo'">
                    </div>
                    <div class="form-group">
                        <input id="form-email" name="form-email" type="email" class="form-control" placeholder="Email" required="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                    </div>
                    <div class="form-group">
                        <input id="form-phone" name="form-phone" type="text" class="form-control" placeholder="Numero Telefonico (optional)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Numero Telefonico (optional)'">
                    </div>
                    <div class="form-group">
                        <textarea id="form-comments" name="form-comments" class="form-control info" placeholder="Cuéntenos su caso (opcional)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cuentenos su caso (optional)'"></textarea>
                    </div>

                    <button id="lwt-send-btn" type="submit" class="submit">ENVIAR</button>
                </form>


                <div class="lwt-success-message">
                    <div class="vertical-align">
                        <h2 class="products-section-title">Gracias por su Interes</h2>
                        <span class="products-section-subtitle">You will hear from someone shortly.</span>
                    </div>
                </div>

                <div class="lwt-error-message">
                    <div class="vertical-align">
                        <h2 class="products-section-title">Houston, we have a problem.</h2>
                        <span class="products-section-subtitle">Please try that again.</span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</nav>
