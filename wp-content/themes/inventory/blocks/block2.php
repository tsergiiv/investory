<!-- #2 Unique Value Proposition -->

<?php
	$posts = get_posts( array(
		'post_type' => 'unique_value_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<section class="section-values">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="values-list grid">
						<div class="values-item grid align-center relative">
							<img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/value-1.png" alt="Value">
							<div class="relative"><?= the_field('text_1') ?></div>
						</div>
						<div class="values-item grid align-center relative">
							<img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/value-2.png" alt="Value">
							<div class="relative"><?= the_field('text_2') ?></div>
						</div>
						<div class="values-item grid align-center relative">
							<img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/value-3.png" alt="Value">
							<div class="relative"><?= the_field('text_3') ?></div>
						</div>
						<div class="values-item grid align-center relative">
							<img class="relative" src="<?php bloginfo('template_url'); ?>/assets/img/icons/value-4.png" alt="Value">
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
