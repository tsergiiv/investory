<!-- #6 Where Enterprise Data Managment Future Is -->
<?php
	$posts = get_posts( array(
			'post_type' => 'enterprise_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<section class="section-managment">
			<div class="container-main">
				<div class="container-inner">
					<div class="managment-wrapper grid">
						<div class="managment-wrapper__left">
							<div class="title flex">
								<h3 class="relative"><?= the_field('title') ?></h3>
							</div>
							<div class="managment-description"><?= the_field('text') ?></div>
						</div>
						<div class="managment-wrapper__right grid">
							<div class="managment-right__item flex flex-column align-center">
								<span><?= the_field('left_bar_sum') ?></span>
								<div class="managment-img">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/managment-1.svg" alt="Managment">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/managment-1-mobile.svg" alt="Managment">
								</div>
								<div class="flex flex-column">
									<span><?= the_field('left_bar_year') ?></span>
									<span><?= the_field('left_bar_lable') ?></span>
								</div>
							</div>
							<div class="managment-right__item flex flex-column align-center">
								<span><?= the_field('right_bar_sum') ?></span>
								<div class="managment-img"></div>
								<div class="flex flex-column">
									<span><?= the_field('right_bar_year') ?></span>
									<span><?= the_field('right_bar_lable') ?></span>
								</div>
							</div>
							<div class="managment-right__tip"><?= the_field('source') ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>