<?php
	$posts = get_posts( array(
			'post_type' => 'business_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #13 Business Model -->
		<section id="section-business" class="section-business">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative"><?= the_field('main_title') ?></h3>
					</div>
					<div class="business-wrapper grid">
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy"><?= the_field('title_1') ?></span>
								<?= the_field('text_1') ?>
							</div>
						</div>
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy"><?= the_field('title_2') ?></span>
								<?= the_field('text_2') ?>
							</div>
						</div>
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy"><?= the_field('title_3') ?></span>
								<?= the_field('text_3') ?>
							</div>
						</div>
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy"><?= the_field('title_4') ?></span>
								<?= the_field('text_4') ?>
							</div>
						</div>
						<div class="business-item-last grid">
							<div class="business-item">
								<div class="relative flex flex-column">
									<span class="gilroy"><?= the_field('title_5') ?></span>
									<?= the_field('text_5') ?>
								</div>
							</div>
							<div class="business-item">
								<div class="relative flex flex-column">
									<span class="gilroy"><?= the_field('title_6') ?></span>
									<?= the_field('text_6') ?>
								</div>
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