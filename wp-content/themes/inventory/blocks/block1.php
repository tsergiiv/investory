<?php
	$posts = get_posts( array(
			'post_type' => 'enrich_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #1 Enrich, Transform, Secure & Deliver Quality Data -->
		<section class="section-title flex flex-column relative">
			<div class="container-main">
				<div class="container-inner">
					<h1 class="gilroy"><?= the_field('title') ?></h1>
				</div>
			</div>
			<div class="section-title__info relative">
				<div class="section-info__head relative flex">
					<div class="info-head__item"><?= the_field('subtitle') ?></div>
				</div>
				<div class="section-info__nums relative grid">
					<div class="info-nums__item flex flex-column">
						<span class="gilroy"><?= the_field('value_1') ?></span>
						<?= the_field('label_1') ?>
					</div>
					<div class="info-nums__item flex flex-column">
						<span class="gilroy"><?= the_field('value_2') ?></span>
						<?= the_field('label_2') ?>
					</div>
					<div class="info-nums__item flex flex-column">
						<span class="gilroy"><?= the_field('value_3') ?></span>
						<?= the_field('label_3') ?>
					</div>
				</div>
			</div>
			<video autoplay muted id="heading">
				<source src="<?php bloginfo('template_url'); ?>/assets/video/heading.mp4" type="video/mp4">
			</video>
		</section>

		<?php
	}

	wp_reset_postdata();
?>