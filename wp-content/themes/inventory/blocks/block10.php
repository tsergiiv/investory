<?php
	$posts = get_posts( array(
			'post_type' => 'features_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #10 Key features will include: -->
		<section class="section-features">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex  justify-center">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="features-list grid">
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-1.svg" alt="Features">
							</div>
							<div class="relative"><?= the_field('text_1') ?></div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-2.svg" alt="Features">
							</div>
							<div class="relative"><?= the_field('text_2') ?></div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-3.svg" alt="Features">
							</div>
							<div class="relative"><?= the_field('text_3') ?></div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-4.svg" alt="Features">
							</div>
							<div class="relative"><?= the_field('text_4') ?></div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-5.svg" alt="Features">
							</div>
							<div class="relative"><?= the_field('text_5') ?></div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-6.svg" alt="Features">
							</div>
							<div class="relative"><?= the_field('text_6') ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>