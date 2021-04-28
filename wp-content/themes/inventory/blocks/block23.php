<?php
	$posts = get_posts( array(
			'post_type' => 'fintech_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #23 FinTech Venture Capital News and Highlights -->
		<section id="section-news" class="section-news relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative mx-auto"><?= the_field('title') ?></h3>
					</div>
					<div class="news-list grid">
						<div class="news-item">
							<?= the_field('text_1') ?>
						</div>
						<div class="news-item">
							<?= the_field('text_2') ?>
						</div>
						<div class="news-item">
							<?= the_field('text_3') ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>