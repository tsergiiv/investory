<?php
	$posts = get_posts( array(
		'post_type' => 'global_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #5 Where Global Data Governance Future Is -->
		<section class="section-global relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							<?= the_field('title') ?>
						</h3>
						<div class="title-tip">
							<?= the_field('subtitle') ?>
						</div>
					</div>
					<div class="global-data-overflow scrollbar-map scrollbar-map-global">
						<div class="global-data grid">
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_1') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_2') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_3') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_4') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_5') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_6') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_7') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy"><?= the_field('year_8') ?></div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
						</div>
						<div class="global-data__tips grid">
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name"><?= the_field('area_1') ?></div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name"><?= the_field('area_2') ?></div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name"><?= the_field('area_3') ?></div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name"><?= the_field('area_4') ?></div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name"><?= the_field('area_5') ?></div>
							</div>
						</div>
						<div class="bot-tip">
							<?= the_field('source') ?>
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