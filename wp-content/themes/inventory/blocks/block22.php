<!-- #22 Financials: Project Income and Projected Expenses -->
<section class="section-financial-dark relative">
	<div class="container-main">
		<div class="container-inner">
			<div class="title no-anim flex flex-column align-center">
				<?php
					$posts = get_posts( array(
							'post_type' => 'table_block',
					) );

					foreach( $posts as $post ) {
						setup_postdata($post);
						?>

						<h3 class="relative">
							<?= the_field('title_4') ?>
						</h3>
						<div class="table-files flex align-center">
							<div class="table-file flex align-center justify-center"><a href="<?= the_field('file_1') ?>" download="<?= the_field('file_name_1') ?>" class="flex align-center"><span><?= the_field('file_name_1') ?></span></a></div>
							<div class="table-file flex align-center justify-center"><a href="<?= the_field('file_2') ?>" download="<?= the_field('file_name_2') ?>" class="flex align-center"><span><?= the_field('file_name_2') ?></span></a></div>
						</div>

						<?php
					}

					wp_reset_postdata();
				?>
			</div>
			<div class="table-dark-alt table-ligh-alt grid scrollbar-map scrollbar-map-light-alt">
				<?= do_shortcode('[table id=3 /]') ?>
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