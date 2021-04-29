<!-- #19 Market Size, Acquisitions and Funding -->
<section class="section-fundings relative">
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
							<?= the_field('title_1') ?>
						</h3>
						<div class="title-tip">
							<?= the_field('subtitle') ?>
						</div>

						<?php
					}

					wp_reset_postdata();
				?>
			</div>
			<div class="table-light grid scrollbar-map scrollbar-map-light">
				<?= do_shortcode('[table id=1 /]') ?>
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