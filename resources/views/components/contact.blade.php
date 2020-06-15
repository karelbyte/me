<div id="contact">
    <div class="row">
        <!-- Contact Form -->
        <section class="contact-form col-md-6 padding_30 padbot_45">
            <div class="section-title top_15 bottom_30"><span></span><h2>Contactame!</h2></div>
            <form class="site-form" id="send_contact">
                {!! RecaptchaV3::field('register') !!}
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input class="site-input" placeholder="Nombre" name="name">
                    </div>
                    <div class="col-md-6">
                        <input class="site-input" placeholder="E-mail" name="email">
                    </div>
                    <div class="col-md-12">
                        <textarea class="site-area" placeholder="Mensaje" name="msj"></textarea>
                    </div>
                    <div class="col-md-12 top_15 bottom_30">
                        <button class="site-btn icon hidden-xs" id="send">Enviar <i id="send_ico" class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
        </section>
        <!-- Contact Informations -->
        <section class="contact-info col-md-6 padding_30 padbot_45">
            <div class="section-title top_15 bottom_30"><span></span><h2>Información de contacto</h2></div>
            <ul>
                <li><span>Phone:</span> +52 755-127-2444</li>
                <li><span>Job:</span> Freelancer</li>
                <li><span>E-mail:</span> karelpdiaz@hotmail.com</li>
                <li>
                    <div class="social-icons top_15">
                        <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </div>
                </li>
            </ul>
        </section>
    </div>
</div>
