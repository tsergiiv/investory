<!-- #3 What We Know Today -->
<?php
	$posts = get_posts( array(
			'post_type' => 'what_we_know_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<section id="section-we-know" class="section-we-know relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex justify-center">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="we-know__list grid relative">
						<div class="we-know__left grid">
							<div class="we-know__item grid relative">
								<div class="we-know__img flex align-center justify-center"><img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/we-know-1.svg" alt=""></div>
								<div class="relative"><?= the_field('text_1') ?></div>
							</div>
							<div class="we-know__item grid relative">
								<div class="we-know__img flex align-center justify-center"><img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/we-know-2.svg" alt="Value"></div>
								<div class="relative"><?= the_field('text_2') ?></div>
							</div>
							<div class="we-know__item grid relative">
								<div class="we-know__img flex align-center justify-center"><img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/we-know-3.svg" alt="Value"></div>
								<div class="relative"><?= the_field('text_3') ?></div>
							</div>
						</div>
						<div class="we-know__right grid">
							<div class="we-know__item grid relative">
								<div class="we-know__img flex align-center justify-center"><img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/we-know-4.svg" alt="Value"></div>
								<div class="relative"><?= the_field('text_4') ?></div>
							</div>
							<div class="we-know__item grid relative">
								<div class="we-know__img flex align-center justify-center"><img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/we-know-5.svg" alt="Value"></div>
								<div class="relative"><?= the_field('text_5') ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<video autoplay muted loop id="rocket">
				<source src="<?php bloginfo('template_url'); ?>/assets/video/rocket.mp4" type="video/mp4">
			</video>
		</section>

		<?php
	}

	wp_reset_postdata();
?>