<?php
	$posts = get_posts( array(
			'post_type' => 'value_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #7 Value We Deliever -->
		<section class="section-deliver">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="deliver-list grid">
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-1.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_1') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-2.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_2') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-3.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_3') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-4.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_4') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-5.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_5') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-6.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_6') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-7.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_7') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-8.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_8') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-9.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_9') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-10.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_10') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-11.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_11') ?></div>
						</div>
						<div class="deliver-item flex flex-column relative animated-icons">
							<div class="deliver-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/deliver-12.svg" alt="We deliver">
							</div>
							<div class="relative"><?= the_field('text_12') ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
	}

	wp_reset_postdata();
?>