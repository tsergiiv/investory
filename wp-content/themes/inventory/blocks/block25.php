<?php
	$posts = get_posts( array(
		'post_type' => 'start_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #25 Start new era of data -->
		<section class="section-era relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="era-wrapper relative flex flex-column">
						<div class="title flex flex-column">
							<h3 class="relative mr-auto">
								<?= the_field('title') ?>
							</h3>
						</div>
						<a href="#" data-toggle="modal-contacts" class="modal-toggle button flex align-center justify-center mt-auto"><?= the_field('button_text') ?></a>
						<img src="<?php bloginfo('template_url'); ?>/assets/img/background-era.png" alt="Start new era of data">
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>