<?php
	$posts = get_posts( array(
			'post_type' => 'solution_block',
	) );

	foreach( $posts as $post ) {
		setup_postdata($post);
		?>

		<!-- #12 Solutions for FinTech -->
		<section class="section-fintech">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative"><?= the_field('main_title') ?></h3>
					</div>
					<div class="fintech-list grid">
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-1.svg" alt="Blockchain/Crypto">
							</div>
							<div class="flex flex-column relative">
                                <span class="gilroy"><?= the_field('title_1') ?></span>
								<?= the_field('text_1') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-2.svg" alt="Money Transfer">
							</div>
							<div class="flex flex-column relative">
                                <span class="gilroy"><?= the_field('title_2') ?></span>
								<?= the_field('text_2') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-3.svg" alt="Insurance">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_3') ?></span>
								<?= the_field('text_3') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-4.svg" alt="Payments Billing">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_4') ?></span>
								<?= the_field('text_4') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-5.svg" alt="Capital Markets">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_5') ?></span>
								<?= the_field('text_5') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-6.svg" alt="Lending">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_6') ?></span>
								<?= the_field('text_6') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-7.svg" alt="Regtech">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_7') ?></span>
								<?= the_field('text_7') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-8.svg" alt="Wealth Management">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_8') ?></span>
								<?= the_field('text_8') ?>
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-9.svg" alt="Mortgage / Real Estate">
							</div>
							<div class="flex flex-column relative">
								<span class="gilroy"><?= the_field('title_9') ?></span>
								<?= the_field('text_9') ?>
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