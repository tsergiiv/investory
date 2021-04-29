<!-- #21 Financials: Profits by Business Segment -->
<section class="section-financial relative">
	<div class="container-main">
		<div class="container-inner">
			<div class="title flex no-anim flex-column align-center">
				<?php
					$posts = get_posts( array(
							'post_type' => 'table_block',
					) );

					foreach( $posts as $post ) {
						setup_postdata($post);
						?>

						<h3 class="relative">
							<?= the_field('title_3') ?>
						</h3>
						<div class="table-file flex align-center justify-center"><a href="<?= the_field('file') ?>" download="<?= the_field('file_name') ?>" class="flex align-center"><span><?= the_field('file_name') ?></span></a></div>

						<?php
					}

					wp_reset_postdata();
				?>
			</div>
			<div class="table-dark-alt table-light-alt grid scrollbar-map scrollbar-map-dark-alt">
				<?= do_shortcode('[table id=2 /]') ?>
				<div class="scroll-element_outer">
					<div class="scroll-element_size">
						<div class="scroll-element_track"></div>
						<div class="scroll-bar"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>