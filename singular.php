<?php get_header(); ?>

<section class="py-5">
    <div class="container">
        <div class="row gap-3">

            <main class="col-8">

                <?php

                if (have_posts()) :
                    while (have_posts()) :
                        the_post();

                ?>
                        <p class="singular-category"><?= get_the_category_list('|') ?></p>
                        <h1 class="singular-title"><?= get_the_title() ?></h1>
                        <p class="singular-excerpt"><?= get_the_excerpt() ?></p>

                        <?php
                        if (!is_page()) :
                        ?>
                            <ul class="singular-share-buttons">
                                <li><i class="far fa-share-alt fa-lg"></i></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook_share.png" alt="Share at Facebook"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter_share.png" alt="Share at Twitter"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin_share.png" alt="Share at Linkedin"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_share.png" alt="Share at whatsapp"></a></li>
                            </ul>
                        <?php
                        endif;
                        ?>

                        <article class="singular-article">
                            <?= get_the_content() ?>
                        </article>

                        <?php
                        if (!is_page()) :
                        ?>

                            <ul class="singular-tags">
                                <li><a href="#">avada</a></li>
                                <li><a href="#">difendo</a></li>
                                <li><a href="#">quedabra</a></li>
                                <li><a href="#">patrono</a></li>
                                <li><a href="#">ridiculus</a></li>
                            </ul>

                            <h4 class="author-card__header"><i class="fas fa-angle-right mr-1"></i>O autor</h4>
                            <div class="author-card">
                                <img src="https://picsum.photos/id/54/90/90" alt="" class="author-card__avatar">
                                <div class="author-card__body">
                                    <h5 class="author-card__name">Lorem ipsum dolor.</h5>
                                    <p class="author-card__title">Lorem ipsum dolor.</p>
                                    <p class="author-card__bio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptatem eos temporibus illum, aliquid, ipsum fugiat quod repellendus quasi odio id minima accusamus tempora eaque?</p>
                                    <ul class="author-card__social">
                                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        <?php
                        endif;
                        ?>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo "<div class='alert alert-info'><i class='far fa-hand-point-right mr-2'></i>A página solicitada não foi encontrada.</div>";
                endif;

                ?>

            </main>

            <aside class="col-4">
                <div class="row pl-3 mb-4">
                    <div class="col-lg-12 col-6 mb-lg-4">
                        <h4 class="mb-2 font-weight-bold" style="font-size: clamp(1.2rem, 1vw, 1.5rem);"><i class="fad fa-angle-right fa-lg text-primary mr-2"></i>Seja um associado</h4>
                        <p class="mb-2" style="font-size: clamp(.75rem, 1vw, 1rem);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aperiam repudiandae. Quas!</p>
                        <a href="#" class="btn btn-sm btn-primary">Veja como se associar<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                    <div class="col-lg-12 col-6">
                        <h4 class="mb-2 font-weight-bold" style="font-size: clamp(1.2rem, 1vw, 1.5rem);"><i class="fad fa-angle-right fa-lg text-primary mr-2"></i>Facilidades exclusivas</h4>
                        <p class="mb-2" style="font-size: clamp(.75rem, 1vw, 1rem);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aperiam repudiandae. Quas!</p>
                        <a href="#" class="btn btn-sm btn-secondary">Conheça as vantagens<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>