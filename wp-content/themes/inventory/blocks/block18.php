<?php
	$posts = get_posts( array(
			'post_type' => 'market_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #18 Market Overview -->
		<section id="section-market" class="section-market relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							<?= the_field('title') ?>
						</h3>
					</div>
					<div class="market-list grid scrollbar-map scrollbar-map-market">
						<div class="market-list__item">
							<div class="market-item__title gilroy"><?= the_field('title_1') ?></div>
							<div class="market-item__img">
								<img class="mw-100" src="<?= the_field('image_1') ?>" alt="History of US VC Deals">
							</div>
							<div class="market-item__tips flex justify-center">
								<div class="market-item__tip flex flex-column align-center justify-center"><?= the_field('lable_1') ?></div>
								<div class="market-item__tip flex flex-column align-center justify-center"><?= the_field('lable_2') ?></div>
							</div>
							<div class="bot-tip">
								<?= the_field('source_1') ?><br>
								<?= the_field('note_1') ?>
							</div>
						</div>
						<div class="market-list__item">
							<div class="market-item__title gilroy"><?= the_field('title_2') ?></div>
							<div class="market-item__img">
								<img class="mw-100" src="<?= the_field('image_2') ?>" alt="History of US VC-backed IPOs">
							</div>
							<div class="market-item__tips flex justify-center">
								<div class="market-item__tip flex flex-column align-center justify-center"><?= the_field('lable_3') ?></div>
								<div class="market-item__tip flex flex-column align-center justify-center"><?= the_field('lable_4') ?></div>
							</div>
							<div class="bot-tip">
								<?= the_field('source_2') ?><br>
								<?= the_field('note_2') ?>
							</div>
						</div>
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

		<?php
	}

	wp_reset_postdata();
?>