<!-- #20 Competitive Overview -->
<section class="section-overview relative">
	<div class="container-main">
		<div class="container-inner">
			<div class="title flex flex-column align-center">
				<?php
					$posts = get_posts( array(
							'post_type' => 'table_block',
					) );

					foreach( $posts as $post ) {
						setup_postdata($post);
						?>

						<h3 class="relative">
							<?= the_field('title_2') ?>
						</h3>

						<?php
					}

					wp_reset_postdata();
				?>
			</div>
			<div class="table-dark grid scrollbar-map scrollbar-map-dark">
				<?= do_shortcode('[table id=4 /]') ?>
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