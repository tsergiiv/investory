<?php
$posts = get_posts( array(
		'post_type' => 'technology_now_block',
) );

foreach( $posts as $post ) {
	setup_postdata($post);
	?>

	<!-- #4 Technology Now Vs Future -->
	<section class="section-technology relative">
		<div class="container-main">
			<div class="container-inner">
				<div class="title flex justify-center">
					<h3 class="relative"><?= the_field('title') ?></h3>
				</div>
				<div class="section-tabs">
					<ul class="nav-tabs flex gilroy">
						<li><a class="active flex align-center justify-center" href="#tab-now">Now</a></li>
						<li><a class="flex align-center justify-center" href="#tab-future">Future</a></li>
					</ul>
					<div id="tab-now" class="section-tab grid fade">
						<div class="tab-item grid relative animated-icons">
							<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-1.svg" alt="Technology"></div>
							<div class="relative"><?= the_field('now_text_1') ?></div>
						</div>
						<div class="tab-item grid relative animated-icons">
							<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-2.svg" alt="Technology"></div>
							<div class="relative"><?= the_field('now_text_2') ?></div>
						</div>
						<div class="tab-item grid relative animated-icons">
							<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-3.svg" alt="Technology"></div>
							<div class="relative"><?= the_field('now_text_3') ?></div>
						</div>
						<div class="tab-item grid relative animated-icons">
							<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-4.svg" alt="Technology"></div>
							<div class="relative"><?= the_field('now_text_4') ?></div>
						</div>
						<div class="tab-item grid relative animated-icons">
							<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-5.svg" alt="Technology"></div>
							<div class="relative"><?= the_field('now_text_5') ?></div>
						</div>
						<div class="tab-item grid relative animated-icons">
							<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-6.svg" alt="Technology"></div>
							<div class="relative"><?= the_field('now_text_6') ?></div>
						</div>
						<div class="tab-item-last grid">
							<div class="tab-item grid relative animated-icons">
								<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-7.svg" alt="Technology"></div>
								<div class="relative"><?= the_field('now_text_7') ?></div>
							</div>
							<div class="tab-item grid relative animated-icons">
								<div class="tab-item__img animated-icons__img flex align-center justify-center"><img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-8.svg" alt="Technology"></div>
								<div class="relative"><?= the_field('now_text_8') ?></div>
							</div>
						</div>
					</div>
					<div id="tab-future" class="section-tab grid">
						<div class="tab-item grid relative">
							<img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-8.svg" alt="Technology">
							<div class="relative"><?= the_field('future_text_1') ?></div>
						</div>
						<div class="tab-item grid relative">
							<img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-9.svg" alt="Technology">
							<div class="relative"><?= the_field('future_text_2') ?></div>
						</div>
						<div class="tab-item grid relative">
							<img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-10.svg" alt="Technology">
							<div class="relative"><?= the_field('future_text_3') ?></div>
						</div>
						<div class="tab-item grid relative">
							<img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-11.svg" alt="Technology">
							<div class="relative"><?= the_field('future_text_4') ?></div>
						</div>
						<div class="tab-item-last grid">
							<div class="tab-item grid relative">
								<img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-12.svg" alt="Technology">
								<div class="relative"><?= the_field('future_text_5') ?></div>
							</div>
							<div class="tab-item grid relative">
								<img class="mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/icons/technology-13.svg" alt="Technology">
								<div class="relative"><?= the_field('future_text_6') ?></div>
							</div>
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