<?php get_header(); ?>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h1 class="text-center">Blog</h1>

            <?php get_search_form() ?>
        </div>


        <div class="row g-3">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-sm-12 col-lg-6 d-flex">
                        <a href="<?= get_permalink() ?>" class="d-flex">
                            <div class="card">
                                <img style="height: 400px" src="<?= get_the_post_thumbnail_url() ?>"
                                     class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title() ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php

                endwhile;
            endif;
            ?>
        </div>
    </div>

<?php get_footer(); ?>