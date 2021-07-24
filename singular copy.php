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
                        <p class="singular-category">notícias</p>
                        <h1 class="singular-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit liquid, eos</h1>
                        <p class="singular-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nostrum aperiam fugit.</p>

                        <?php
                        if (!is_page()) :
                        ?>
                            <ul class="singular-share-buttons">
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook_share.png" alt="Share at Facebook"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter_share.png" alt="Share at Twitter"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin_share.png" alt="Share at Linkedin"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp_share.png" alt="Share at whatsapp"></a></li>
                            </ul>
                        <?php
                        endif;
                        ?>

                        <article class="singular-article">

                            <figure>
                                <img src="https://picsum.photos/id/1071/600/400" alt="">
                                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit.</figcaption>
                            </figure>

                            <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis nobis odit delectus dolores reiciendis. Unde ipsum nobis rerum quidem. Quo quidem facilis amet voluptates enim, eos delectus error illo deleniti?</p>
                            <p>Sed, earum repellendus beatae nulla consequuntur placeat, laudantium molestiae omnis adipisci exercitationem distinctio, expedita rerum nostrum laborum. Earum saepe consectetur necessitatibus quaerat quis excepturi eum dolores dolor. Alias, explicabo similique.</p>
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Soluta natus repellat facilis libero repudiandae culpa, non cupiditate modi doloribus sint eius consequuntur odio alias nihil nostrum deserunt et id perferendis deleniti ut, blanditiis provident. Odio velit illum totam!</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni maiores assumenda.</li>
                                <li>Nisi omnis quod doloribus cumque sint eaque facilis culpa maiores tempore eveniet?</li>
                                <li>Reprehenderit consequatur iure voluptas nisi ducimus, harum reiciendis exercitationem, libero ipsa magnam debitis?</li>
                                <li>Nihil ea illum deserunt. Eos, velit? Amet iure inventore suscipit at, neque aliquid quaerat?</li>
                                <li>Laudantium beatae voluptate accusamus earum mollitia enim, quas necessitatibus molestiae dolor. Quibusdam, natus.</li>
                            </ul>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est saepe impedit qui, perferendis magnam voluptatem consequatur blanditiis, consectetur reiciendis illo non!</p>
                            <p>Eligendi mollitia eum at repellendus, unde eaque exercitationem consequatur sint quae voluptatem praesentium architecto placeat commodi modi atque quod fugiat nostrum tenetur veniam natus nesciunt? Tempora, amet?</p>
                            <p>Obcaecati incidunt sint impedit earum iste magnam eaque, architecto ratione. Est deserunt exercitationem itaque corrupti hic deleniti, dicta veniam fugiat doloribus.</p>


                            <blockquote cite="http://www.worldwildlife.org/who/index.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio aspernatur hic consectetur est in ut qui, cum dolores ipsum eaque perferendis laboriosam aliquid quos ducimus.</blockquote>

                            <h3>Lorem ipsum dolor sit.</h3>
                            <p>Consequatur voluptatem adipisci maxime illum ut hic eligendi soluta non nisi deleniti minus assumenda alias corporis voluptate numquam, similique libero deserunt. Quisquam tempore sint quod aliquam officiis quos? Quod, id?</p>
                            <p>At a quis iure consequatur veniam quia corrupti, velit officiis nisi sit fugit laboriosam non eveniet alias repellat harum ea amet sapiente quod deserunt error. Sit quam natus laudantium saepe!</p>
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
                        <a href="#" class="btn btn-block btn-sm btn-outline-secondary">Veja como se associar<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                    <div class="col-lg-12 col-6">
                        <h4 class="mb-2 font-weight-bold" style="font-size: clamp(1.2rem, 1vw, 1.5rem);"><i class="fad fa-angle-right fa-lg text-primary mr-2"></i>Facilidades exclusivas</h4>
                        <p class="mb-2" style="font-size: clamp(.75rem, 1vw, 1rem);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aperiam repudiandae. Quas!</p>
                        <a href="#" class="btn btn-block btn-sm btn-outline-secondary">Conheça as vantagens<i class="fas fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php get_footer(); ?>