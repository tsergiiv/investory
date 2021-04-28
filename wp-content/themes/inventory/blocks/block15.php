<!-- #15 Success Projects -->
<section class="section-projects">
	<div class="container-main">
		<div class="container-inner">
			<div class="title flex flex-column align-center">
				<h3 class="relative">Success Projects</h3>
			</div>
			<div class="projects-list owl-carousel">
				<?php
					$posts = get_posts( array(
						'post_type' => 'project_block',
					) );

					foreach( $posts as $post ) {
						setup_postdata($post);
						?>

						<div class="projects-item">
							<div class="projects-item__img flex align-center">
								<img src="<?= the_field('image') ?>" alt="TD Bank">
							</div>
							<div class="projects-item__title gilroy"><?= the_field('title') ?></div>
							<div class="projects-item__description">
								<?= the_field('text') ?>
							</div>
						</div>

						<?php
					}

					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</section>