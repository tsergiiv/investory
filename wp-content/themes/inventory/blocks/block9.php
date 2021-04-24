<?php
$posts = get_posts( array(
		'post_type' => 'platform_block',
) );

foreach( $posts as $post ) {
	setup_postdata($post);
	?>

	<!-- #9 Platform and Solutions -->
	<section id="section-solutions" class="section-solutions">
		<div class="container-main">
			<div class="container-inner">
				<div class="title flex">
					<h3 class="relative"><?= the_field('title') ?></h3>
				</div>
				<div class="solutions-list grid">
					<div class="solutions-item flex flex-column relative">
						<div class="solutions-item__img flex align-center justify-center">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-1.png" alt="We deliver">
						</div>
						<div class="relative"><?= the_field('text_1') ?></div>
					</div>
					<div class="solutions-item flex flex-column relative">
						<div class="solutions-item__img flex align-center justify-center">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-2.png" alt="We deliver">
						</div>
						<div class="relative"><?= the_field('text_2') ?></div>
					</div>
					<div class="solutions-item flex flex-column relative">
						<div class="solutions-item__img flex align-center justify-center">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-3.png" alt="We deliver">
						</div>
						<div class="relative"><?= the_field('text_3') ?></div>
					</div>
					<div class="solutions-item flex flex-column relative">
						<div class="solutions-item__img flex align-center justify-center">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-4.png" alt="We deliver">
						</div>
						<div class="relative"><?= the_field('text_4') ?></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
}

wp_reset_postdata();
?>