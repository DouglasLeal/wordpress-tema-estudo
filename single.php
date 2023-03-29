<?php get_header(); ?>

    <div class="container">
		<?php
		if ( have_posts() ):
			while ( have_posts() ):
				the_post();
				?>
                <h1 class="text-center"><?php the_title() ?></h1>
                <img style="height: 400px" src="<?= get_the_post_thumbnail_url() ?>"
                     class="card-img-top" alt="">
                <div>
					<?php the_content() ?>
                </div>
			<?php
			endwhile;
		endif;
		?>
    </div>

<?php get_footer(); ?>