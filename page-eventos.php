<?php /* Template Name: Eventos */ ?>
<?php get_header(); ?>

    <div class="container">
		<?php
		$loop = new WP_Query( ['post_type' => 'eventos'] );
		if ( $loop->have_posts() ):
			while ( $loop->have_posts() ):
				$loop->the_post();
				?>
                <h1 class="text-center"><?php the_title() ?></h1>
				<?php if ( get_the_post_thumbnail_url() ): ?>
                <img style="height: 400px" src="<?= get_the_post_thumbnail_url() ?>"
                     class="card-img-top" alt="">
                <div>
			<?php
			endif;
			the_content()
				?>
                </div>
			<?php
			endwhile;
		endif;
		?>
    </div>

<?php get_footer(); ?>