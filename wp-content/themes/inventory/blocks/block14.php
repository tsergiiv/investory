<?php
	$posts = get_posts( array(
			'post_type' => 'success_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #14 Success Story -->
		<section id="section-success" class="section-success">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="success-list grid">
						<div class="success-item">
							<div class="success-item__img">
								<img class="w-100" src="<?= the_field('image_1') ?>" alt="Proactive communication and collaboration">
							</div>
							<div class="success-item__title gilroy"><?= the_field('title_1') ?></div>
							<ul class="success-item__description"><?= the_field('text_1') ?></ul>
						</div>
						<div class="success-item">
							<div class="success-item__img">
								<img class="w-100" src="<?= the_field('image_2') ?>" alt="Internal coordination and customer point person">
							</div>
							<div class="success-item__title gilroy"><?= the_field('title_2') ?></div>
							<ul class="success-item__description"><?= the_field('text_2') ?></ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>