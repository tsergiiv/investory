<?php
	$posts = get_posts( array(
			'post_type' => 'invest_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #16 Why Invest with Us -->
		<section class="section-invest">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative"><?= the_field('title') ?></h3>
					</div>
					<div class="invest-list grid">
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-1.svg" alt="Expertise">
							</div>
							<div class="flex flex-column relative">
                                <span class="gilroy"><?= the_field('title_1') ?></span>
								<?= the_field('text_1') ?>
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-2.svg" alt="Relationships">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_2') ?></span>
								<?= the_field('text_2') ?>
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-3.svg" alt="Timelines">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_3') ?></span>
								<?= the_field('text_3') ?>
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-4.svg" alt="Strong Teams">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_4') ?></span>
								<?= the_field('text_4') ?>
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-5.svg" alt="Agile Environment">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_5') ?></span>
								<?= the_field('text_5') ?>
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-6.svg" alt="Knowledge">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_6') ?></span>
								<?= the_field('text_6') ?>
							</div>
						</div>
						<div class="invest-item__last grid">
							<div class="invest-item flex flex-column relative animated-icons-simple">
								<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-7.svg" alt="Project Management">
								</div>
								<div class="flex flex-column relative">
									<span class="gilroy"><?= the_field('title_7') ?></span>
									<?= the_field('text_7') ?>
								</div>
							</div>
							<div class="invest-item flex flex-column relative animated-icons-simple">
								<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-9.svg" alt="Security & compliance">
								</div>
								<div class="flex flex-column relative">
									<span class="gilroy"><?= the_field('title_8') ?></span>
									<?= the_field('text_8') ?>
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