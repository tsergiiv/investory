<!-- #6 Where Enterprise Data Managment Future Is -->
<?php
	$posts = get_posts( array(
			'post_type' => 'enterprise_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>


		<section class="section-management">
			<div class="container-main">
				<div class="container-inner">
					<div class="management-wrapper grid">
						<div class="management-wrapper__left">
							<div class="title flex no-anim">
								<h3 class="relative"><?= the_field('title') ?></h3>
							</div>
							<div class="management-description">
								<?= the_field('text') ?>
							</div>
						</div>
						<div class="management-wrapper__right grid">
							<div class="management-right__item flex flex-column align-center">
								<span><?= the_field('left_bar_sum') ?></span>
								<div class="management-img">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/managment-1.svg" alt="Management">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/managment-1-mobile.svg" alt="Management">
								</div>
								<div class="flex flex-column">
									<span><?= the_field('left_bar_year') ?></span>
									<span><?= the_field('left_bar_lable') ?></span>
								</div>
							</div>
							<div class="management-right__item flex flex-column align-center">
								<span><?= the_field('right_bar_sum') ?></span>
								<div class="management-img"></div>
								<div class="flex flex-column">
									<span><?= the_field('right_bar_year') ?></span>
									<span><?= the_field('right_bar_lable') ?></span>
								</div>
							</div>
							<div class="management-right__tip">
								<?= the_field('source') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php
	}

	wp_reset_postdata();
?>