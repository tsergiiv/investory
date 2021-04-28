<?php
	$posts = get_posts( array(
			'post_type' => 'architecture_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #11 High Level Solution Architecture -->
		<section class="section-architecture">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex  justify-center">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="architecture-items-overflow scrollbar-map relative">
						<div class="architecture-items relative">
							<div class="architecture-item __dbms hover">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dbms.svg" alt="DBMS">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dbms-dark.svg" class="img-dark" alt="DBMS">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<?= the_field('text_1') ?>
									</ul>
								</div>
								<div class="architecture-item__text __dbms"><?= the_field('lable_1') ?></div>
							</div>
							<div class="architecture-item __data hover">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/data-exchange.svg" alt="Data Exchange Servers">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/data-exchange-dark.svg" class="img-dark" alt="Data Exchange Servers">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<?= the_field('text_2') ?>
									</ul>
								</div>
								<div class="architecture-item__text __data"><?= the_field('lable_2') ?></div>
							</div>
							<div class="architecture-item __client hover">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/client-service.svg" alt="Client Service Zone">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/client-service-dark.svg" class="img-dark" alt="Client Service Zone">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<?= the_field('text_3') ?>
									</ul>
								</div>
								<div class="architecture-item__text __client"><?= the_field('lable_3') ?></div>
							</div>
							<div class="architecture-item __external hover">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dbms.svg" alt="External Partners">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dbms-dark.svg" class="img-dark" alt="External Partners">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<?= the_field('text_4') ?>
									</ul>
								</div>
								<div class="architecture-item__text __external"><?= the_field('lable_4') ?></div>
							</div>
							<div class="architecture-item __dedicated hover">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dedicated.svg" alt="Dedicated Servicing Solutions">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dedicated-dark.svg" class="img-dark" alt="Dedicated Servicing Solutions">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<?= the_field('text_6_1') ?>
									</ul>
								</div>
							</div>
							<div class="architecture-item __proprietary hover">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/proprietary.svg" alt="Proprietary Servicing Solutions">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/proprietary-dark.svg" class="img-dark" alt="Proprietary Servicing Solutions">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<?= the_field('text_6_2') ?>
									</ul>
								</div>
							</div>
							<div class="architecture-item __vpn">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/api-daily-feeds.svg" alt="API/Open VPN">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/api-daily-feeds-dark.svg" class="img-dark" alt="API/Open VPN">
								<div class="architecture-item__text __vpn"><?= the_field('lable_5') ?></div>
							</div>
							<div class="architecture-item __api">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/api-daily-feeds.svg" alt="Proprietary Servicing Solutions">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/api-daily-feeds-dark.svg" class="img-dark" alt="Proprietary Servicing Solutions">
								<div class="architecture-item__text __api"><?= the_field('lable_7') ?></div>
							</div>
							<div class="architecture-item __market">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/market-data.svg" alt="Proprietary Servicing Solutions">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/market-data-dark.svg" class="img-dark" alt="Proprietary Servicing Solutions">
								<div class="architecture-item__text __market"><?= the_field('lable_8') ?></div>
							</div>
							<div class="architecture-item __processed">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/processed-data.svg" alt="Processed/Unprocessed Data">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/processed-data-dark.svg" class="img-dark" alt="Processed/Unprocessed Data">
								<div class="architecture-item__text __processed"><?= the_field('lable_9') ?></div>
								<div class="architecture-item__text __unprocessed"><?= the_field('lable_10') ?></div>
							</div>
							<div class="architecture-item __union">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/union.svg" alt="Proprietary Managed Architecture">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/union-dark.svg" class="img-dark" alt="Proprietary Managed Architecture">
								<div class="architecture-item__text __union"><?= the_field('lable_6') ?></div>
							</div>
							<div id="lottie"></div>
							<!--<img src="<?php bloginfo('template_url'); ?>/assets/img/scheme-no-text.png" alt="">-->
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