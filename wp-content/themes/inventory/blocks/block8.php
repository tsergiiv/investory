<?php
	$posts = get_posts( array(
			'post_type' => 'problems_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #8 Problems We Solve -->
		<section class="section-solve">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							<?= the_field('main_title') ?>
						</h3>
					</div>
					<div class="solve-wrapper grid">
						<div class="solve-item">
							<div class="solve-item__img flex align-center justify-center relative">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/optimize.svg" alt="We solve">
							</div>
							<div class="solve-item__title gilroy"><?= the_field('title_1') ?></div>
							<div class="solve-item__description"><?= the_field('text_1') ?></div>
						</div>
						<div class="solve-item">
							<div class="solve-item__img flex align-center justify-center  relative">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/assure.svg" alt="We solve">
							</div>
							<div class="solve-item__title gilroy"><?= the_field('title_2') ?></div>
							<div class="solve-item__description"><?= the_field('text_2') ?></div>
						</div>
						<div class="solve-item">
							<div class="solve-item__img flex align-center justify-center  relative">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/integrate.svg" alt="We solve">
							</div>
							<div class="solve-item__title gilroy"><?= the_field('title_3') ?></div>
							<div class="solve-item__description"><?= the_field('text_3') ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>