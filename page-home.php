<?php get_header(); ?>

<section class="slider py-5">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture class="d-block w-100" alt="Slide 001">
                        <source media="(min-width: 555px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/img-slider-full.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-slider-small.jpg">
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture class="d-block w-100" alt="Slide 001">
                        <source media="(min-width: 555px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/img-slider-002-full.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-slider-002-small.jpg">
                    </picture>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="support mb-5">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                <div class="destaque-card">
                    <img src="https://picsum.photos/id/1074/300/300" alt="" class="destaque-card__cover">
                    <div class="destaque-card__body">
                        <h5 class="destaque-card__title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="destaque-card__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus soluta dolores quam culpa neque! Obcaecati atque quod iure.</p>
                        <a href="#" class="destaque-card__link">Veja mais detalhes<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                <div class="destaque-card">
                    <img src="https://picsum.photos/id/1084/300/300" alt="" class="destaque-card__cover">
                    <div class="destaque-card__body">
                        <h5 class="destaque-card__title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="destaque-card__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus soluta dolores quam culpa neque! Obcaecati atque quod iure.</p>
                        <a href="#" class="destaque-card__link">Saiba mais<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="blog py-4">
    <div class="container">
        <div class="row">

            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                <div class="noticias-card">
                    <img src="https://picsum.photos/id/1071/600/400" alt="<?= null ?>" class="noticias-card__cover">
                    <div class="noticias-card__body">
                        <h5 class="noticias-card__title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="noticias-card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque voluptate nemo quaerat voluptas inventore!</p>
                        <a href="<?= null ?>" class="noticias-card__link"></a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                <div class="noticias-card">
                    <img src="https://picsum.photos/id/1065/600/400" alt="<?= null ?>" class="noticias-card__cover">
                    <div class="noticias-card__body">
                        <h5 class="noticias-card__title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="noticias-card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque voluptate nemo quaerat voluptas inventore!</p>
                        <a href="<?= null ?>" class="noticias-card__link"></a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                <div class="noticias-card">
                    <img src="https://picsum.photos/id/1025/600/400" alt="<?= null ?>" class="noticias-card__cover">
                    <div class="noticias-card__body">
                        <h5 class="noticias-card__title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="noticias-card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque voluptate nemo quaerat voluptas inventore!</p>
                        <a href="<?= null ?>" class="noticias-card__link"></a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                <div class="noticias-card">
                    <img src="https://picsum.photos/id/1009/600/400" alt="<?= null ?>" class="noticias-card__cover">
                    <div class="noticias-card__body">
                        <h5 class="noticias-card__title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                        <p class="noticias-card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit itaque voluptate nemo quaerat voluptas inventore!</p>
                        <a href="<?= null ?>" class="noticias-card__link"></a>
                    </div>
                </div>
            </div>


            <!-- <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card shadow-sm">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-001.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit est exatumus</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card shadow-sm">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-002.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit est exatumus</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card shadow-sm">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-003.jpg" class="card-img-top" alt="...">
                            <div class="card-body" style="font-size: clamp(.8rem, 1vw, 1rem);">
                                <h5 class="card-title">Lorem ipsum dolor sit est exatumus</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card shadow-sm">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-002.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit est exatumus</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div> -->
        </div>
        <div class="row pt-4">
            <div class="col text-center text-md-right">
                <a href="#" class="btn btn-outline-secondary btn-sm">Acessar o blog<i class="fas fa-external-link-alt ml-2"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="partners mb-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col text-center">
                <h2>Empresas parceiras</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4 col-lg-2 mb-3 mb-lg-0 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-acevive.png" alt="Acevive">
            </div>
            <div class="col-4 col-lg-2 mb-3 mb-lg-0 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ouvidoria.png" alt="Acevive">
            </div>
            <div class="col-4 col-lg-2 mb-3 mb-lg-0 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-seu-beneficio.png" alt="Acevive">
            </div>
            <div class="col-4 col-lg-2 mb-3 mb-lg-0 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-ronconi.png" alt="Acevive">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>