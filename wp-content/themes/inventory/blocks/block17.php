<?php
	$posts = get_posts( array(
			'post_type' => 'investory_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #17 Investory's Org Chart -->
		<section class="section-chart relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="chart-list grid">
						<div class="chart-scheme gilroy">
							<div class="chart-item chart-level__1 flex relative">
								<?= the_field('lable_1') ?>
							</div>
							<div class="chart-item chart-level__2 flex relative">
								<?= the_field('lable_2') ?>
							</div>
							<div class="chart-level__3 relative">
								<div class="chart-item level-3__item flex relative">
									<?= the_field('lable_3') ?>
								</div>
								<div class="chart-item level-3__item flex relative">
									<?= the_field('lable_4') ?>
								</div>
								<div class="chart-item level-3__item flex relative">
									<?= the_field('lable_5') ?>
								</div>
							</div>
						</div>
						<div class="chart-info">
							<h4><?= the_field('title_1') ?></h4>
							<div class="chart-info__description">
								<?= the_field('text_1') ?>
							</div>
							<h4><?= the_field('title_2') ?></h4>
							<div class="chart-info__description">
								<?= the_field('text_2') ?>
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