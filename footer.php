<?php

/**
 * Arquivo footer do tema Avives
 * @package avives
 */

?>
            <footer>
                <section class="footer-links py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-lg mb-lg-0 order-2 order-lg-1">
                                <h4><i class="fad fa-angle-right fa-lg mr-2"></i>Links úteis</h4>
                                <ul class="footer-nav-links">
                                    <li><a href="#">Vagas de Trabalho</a></li>
                                    <li><a href="#">Sobre a Avives</a></li>
                                    <li><a href="#">Nossos Associados</a></li>
                                    <li><a href="#">Empresas Parceiras</a></li>
                                    <li><a href="#">Contato</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-lg mb-lg-0 order-3 order-lg-2">
                                <h4><i class="fad fa-angle-right fa-lg mr-2"></i>Localização</h4>
                                <ul class="footer-nav-links">
                                    <li>Av. Lorem ipsum dolor sit, 5080, amet consectetur - Natal / RN - Brasil<br>CEP: 26.800-000</li>
                                    <li><a href="#"><i class="fas fa-lg fa-envelope mr-2"></i>contato@avives.org</a></li>
                                    <li><a href="#"><i class="far fa-lg fa-phone mr-2"></i>+55 (62) <strong>4558-9885</strong></a></li>
                                    <li><a href="#"><i class="fab fa-lg fa-whatsapp mr-2"></i>+55 (62) <strong>98857-9885</strong></a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg order-1 mb-4 mb-lg-0 order-lg-3">
                                <div class="newsletter text-center shadow">
                                    <h4>Fique atualizado!</h4>
                                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias officia debitis.</p>
                                    <form action="" method="POST" class="needs-valiation" novalidate>
                                        <input type="email" class="form-control form-control-sm mb-2 text-center" name="email" id="email" placeholder="Seu melhor e-mail">
                                        <button type="submit" class="btn btn-sm btn-secondary mb-2"><i class="far fa-check mr-2"></i>Cadastrar agora</button>
                                        <a href="#" class="d-block"><small>Política de privacidade</small></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer-bottom p-3">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg mb-3 mb-lg-0 text-center text-lg-left">
                                <a href="#" class="text-light"><i class="fab fa-instagram fa-2x mr-2"></i></a>
                                <a href="#" class="text-light"><i class="fab fa-facebook-square fa-2x mr-2"></i></a>
                                <a href="#" class="text-light"><i class="fab fa-whatsapp fa-2x mr-2"></i></a>
                            </div>
                            <div class="col-12 col-lg mb-3 mb-lg-0 text-light text-center">
                                Avives &copy; 2021 &bullet; Todos os direitos reservados
                            </div>
                            <div class="col-12 col-lg text-center text-lg-right">
                                <img class="image-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/avives-nega-logo.svg" alt="Avives">
                            </div>
                        </div>
                    </div>
                </section>
            </footer>

        </div>
        
        <?php wp_footer(); ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>

</html>