
	<footer>
		<div class="container-main">
			<div class="container-inner">
				<?php
					$posts = get_posts( array(
							'post_type' => 'footer_block',
					) );

					foreach( $posts as $post ) {
						setup_postdata($post);
						?>

						<div class="title flex flex-column">
							<h3 class="relative mx-auto">
								<?= the_field('title') ?>
							</h3>
						</div>
						<div class="footer-description">
							<?= the_field('text') ?>
						</div>
						<nav class="footer-botrow flex align-center">
							<a href="#section-we-know">Problem statement</a>
							<a href="#section-solutions">Solution</a>
							<a href="#section-business">Business Model</a>
							<div class="logo ml-auto">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/logo-footer.svg" alt="Logo">
							</div>
							<a href="#section-success">Success Story</a>
							<a href="#section-market">Market Overview</a>
							<a href="#section-news">Industry Highlights</a>
						</nav>
						<div class="menu">Menu</div>
						<nav class="menu-nav">
							<a href="#section-we-know">Problem statement</a>
							<a href="#section-solutions">Solution</a>
							<a href="#section-business">Business Model</a>
							<a href="#section-success">Success Story</a>
							<a href="#section-market">Market Overview</a>
							<a href="#section-news">Industry Highlights</a>
						</nav>
						<div class="copyright">
							<?= the_field('copyright') ?>
						</div>

						<?php
					}

					wp_reset_postdata();
				?>
			</div>
		</div>
	</footer>

	<?php
		$posts = get_posts( array(
				'post_type' => 'table_block',
		) );

		foreach( $posts as $post ) {
			setup_postdata($post);
			?>

			<div id="modal-snowflake" class="modal m-auto">
				<div class="modal-dialog m-auto">
					<a href="#" class="button-close modal-close"><img src="assets/img/icons/close.svg" alt=""></a>
					<h4 class="modal-title"><?= the_field('modal_title_1') ?></h4>
					<div class="modal-body">
						<ul>
							<?= the_field('modal_text_1') ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="modal-sumo" class="modal m-auto">
				<div class="modal-dialog m-auto">
					<a href="#" class="button-close modal-close"><img src="assets/img/icons/close.svg" alt=""></a>
					<h4 class="modal-title"><?= the_field('modal_title_2') ?></h4>
					<div class="modal-body">
						<ul>
							<?= the_field('modal_text_2') ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="modal-precisely" class="modal m-auto">
				<div class="modal-dialog m-auto">
					<a href="#" class="button-close modal-close"><img src="assets/img/icons/close.svg" alt=""></a>
					<h4 class="modal-title"><?= the_field('modal_title_3') ?></h4>
					<div class="modal-body">
						<ul>
							<?= the_field('modal_text_3') ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="modal-axway" class="modal m-auto">
				<div class="modal-dialog m-auto">
					<a href="#" class="button-close modal-close"><img src="assets/img/icons/close.svg" alt=""></a>
					<h4 class="modal-title"><?= the_field('modal_title_4') ?></h4>
					<div class="modal-body">
						<ul>
							<?= the_field('modal_text_4') ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="modal-blackline" class="modal m-auto">
				<div class="modal-dialog m-auto">
					<a href="#" class="button-close modal-close"><img src="assets/img/icons/close.svg" alt=""></a>
					<h4 class="modal-title"><?= the_field('modal_title_5') ?></h4>
					<div class="modal-body">
						<ul>
							<?= the_field('modal_text_5') ?>
						</ul>
					</div>
				</div>
			</div>

			<?php
		}

		wp_reset_postdata();
	?>

	<div id="modal-contacts" class="modal m-auto">
		<div class="modal-dialog m-auto">
			<a href="#" class="button-close modal-close"><img src="assets/img/icons/close.svg" alt=""></a>
			<h4 class="modal-title">Let's Connect!</h4>
			<div class="modal-body">
				<form>
					<input type="text" name="action" value="<?= admin_url('admin-ajax.php?action=send_mail') ?>" hidden>
					<div class="form-group">
						<label for="name">Name</label>
						<input id="name" type="text" name="name" placeholder="Enter your name">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="Enter your email">
					</div>
					<div class="form-group">
						<label for="link">Url</label>
						<input id="link" type="text" name="link" placeholder="Company URL">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea id="message" name="message" placeholder="Tell us how we can help"></textarea>
					</div>
					<button type="submit" id="submit-btn" disabled class="button flex align-center justify-center mx-auto">Send</button>
				</form>
			</div>
		</div>
	</div>
	<div class="scroll-top"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/owl-right.svg" alt=""></div>

	<script type="text/javascript">
        let templateUrl = '<?= get_bloginfo("template_url"); ?>';
        // console.log(templateUrl);

        let url = '<?= get_bloginfo("url"); ?>';
        // console.log(url);
    </script>

    <?php wp_footer(); ?>

</body>
</html>
