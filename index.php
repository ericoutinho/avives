<?php get_header(); ?>

<section class="py-5">
    <div class="container">
        <div class="row gap-3">

            <main class="col-8">
                <?php if (is_search()) : ?>
                    <p class="mb-3"><i class="fas fa-search mr-2"></i><strong>Você pesquisou por</strong>: <span class="rounded bg-light px-2 py-1"><?= esc_attr(the_search_query()); ?></span></p>
                <?php endif; ?>

                <?php

                if (have_posts()) :
                    while (have_posts()) :
                        the_post();

                ?>
                        <div class="row">
                            <div class="blog-card">
                                <img src="<?= get_the_post_thumbnail_url() ?>" class="blog-card__cover">
                                <div class="blog-card__body">
                                    <p class="blog-card__time">
                                        <i class="fad fa-clock mr-1 text-primary"></i><?= get_the_date('d/m/Y') ?>
                                    </p>
                                    <h3 class="blog-card__title"><?= get_the_title() ?></h3>
                                    <p class="blog-card__text"><?= get_the_excerpt() ?></p>
                                    <a href="<?= get_the_permalink() ?>" class="blog-card__link">Ver post completo</a>
                                </div>
                            </div>
                        </div>

                <?php

                    endwhile;
                    wp_reset_postdata();
                
                else:
                    echo "<div class='alert alert-info'><i class='far fa-hand-point-right mr-2'></i>Não foram encontradas postagens para exibição.</div>";
                endif;

                ?>

                <p>Paginação aqui</p>
            </main>

            <aside class="col-4">
                <div class="row pl-3 mb-4">
                    <div class="col-lg-12 col-6 mb-lg-5">
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
                <p>posts recentes</p>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>