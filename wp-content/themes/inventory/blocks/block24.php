<?php
$posts = get_posts( array(
		'post_type' => 'key_block',
) );

foreach( $posts as $post ) {
	setup_postdata($post);
	?>


	<!-- #24 Key Leadership -->
	<section class="section-leader relative">
		<div class="container-main">
			<div class="container-inner">
				<div class="title flex flex-column align-center">
					<h3 class="relative mx-auto">
						<?= the_field('title') ?>
					</h3>
				</div>
				<div class="leader-wrapper grid">
					<div class="leader-img grid">
						<img src="<?= the_field('image') ?>" class="mw-100" alt="Marina Berger">
						<div class="leader-info__title flex flex-column">
							<h5 class="gilroy"><?= the_field('full_name') ?></h5>
							<div class="contacts flex">
								<div class="flex flex-column">
									<a href="<?= the_field('linkedin') ?>" target="_blank" class="flex align-center">Linkedin</a>
									<a href="<?php bloginfo('template_url'); ?>/assets/files/Marina_Berger.vcf" class="vcard flex align-center" download="vCard">vCard</a>
								</div>
								<div class="flex flex-column">
									<a href="tel:<?= the_field('phone') ?>" class="flex align-center"><?= the_field('phone') ?></a>
									<a href="mailto:<?= the_field('email') ?>" class="flex align-center"><?= the_field('email') ?></a>
								</div>
							</div>
						</div>
					</div>
					<div class="leader-info">
						<div class="leader-info__description active">
							<h6 class="leader-description__title flex align-center gilroy"><?= the_field('title_1') ?><span class="plus relative flex align-center justify-center ml-auto"></span></h6>
							<div class="leader-description__text" style="display: block;">
								<?= the_field('text_1') ?>
							</div>
						</div>
						<div class="leader-info__description">
							<h6 class="leader-description__title flex align-center gilroy"><?= the_field('title_2') ?><span class="plus relative flex align-center justify-center ml-auto"></span></h6>
							<div class="leader-description__text">
								<?= the_field('text_2') ?>
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