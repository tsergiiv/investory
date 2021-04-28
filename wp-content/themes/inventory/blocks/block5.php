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
								<div class="data-year gilroy">2020</div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy">2021</div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy">2022</div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy">2023</div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy">2024</div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy">2025</div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy">2026</div>
								<div class="data-chart flex flex-column">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="global-data__item flex flex-column">
								<div class="data-year gilroy">2027</div>
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
								<div class="data-name">North America</div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name">Europe</div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name">Asia Pacific</div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name">South America</div>
							</div>
							<div class="global-data__item flex flex-column align-center relative">
								<div class="data-name">Middle East and Africa</div>
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