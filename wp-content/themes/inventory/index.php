<?php get_header(); ?>

	<!-- CONTENT -->
	<!-- #1 Enrich, Transform, Secure & Deliver Quality Data -->
	<!-- #2 Unique Value Proposition -->
	<!-- #3 What We Know Today -->
	<!-- #4 Technology Now Vs Future -->
	<!-- #5 Where Global Data Governance Future Is -->
	<!-- #6 Where Enterprise Data Managment Future Is -->
	<!-- #7 Value We Deliever -->
	<!-- #8 Problems We Solve -->
	<!-- #9 Platform and Solutions -->
	<!-- #10 Key features will include: -->
	<!-- #11 High Level Solution Architecture -->
	<!-- #12 Solutions for FinTech -->
	<!-- #13 Business Model -->
	<!-- #14 Success Story -->
	<!-- #15 Success Projects -->
	<!-- #16 Why Invest with Us -->
	<!-- #17 Investory's Org Chart -->
	<!-- #18 Market Overview -->
	<!-- #19 Market Size, Acquisitions and Funding -->
	<!-- #20 Competitive Overview -->
	<!-- #21 Financials: Profits by Business Segment -->
	<!-- #22 Financials: Project Income and Projected Expenses -->
	<!-- #23 FinTech Venture Capital News and Highlights -->
	<!-- #24 Key Leadership -->
	<!-- #25 Start new era of data -->

	<main>
		<?php
			$posts = get_posts( array(
					'numberposts' => 25,
					'post_type'   => 'block',
			) );

			foreach( $posts as $post ) {
				setup_postdata($post);

				switch (get_field('block_number')) {
					case 1:
						get_field('visible') ? get_template_part('blocks/block1') : '';
						break;
					case 2:
						get_field('visible') ? get_template_part('blocks/block2') : '';
						break;
					case 3:
						get_field('visible') ? get_template_part('blocks/block3') : '';
						break;
					case 4:
						get_field('visible') ? get_template_part('blocks/block4') : '';
						break;
					case 5:
						get_field('visible') ? get_template_part('blocks/block5') : '';
						break;
					case 6:
						get_field('visible') ? get_template_part('blocks/block6') : '';
						break;
					case 7:
						get_field('visible') ? get_template_part('blocks/block7') : '';
						break;
					case 8:
						get_field('visible') ? get_template_part('blocks/block8') : '';
						break;
					case 9:
						get_field('visible') ? get_template_part('blocks/block9') : '';
						break;
					case 10:
						get_field('visible') ? get_template_part('blocks/block10') : '';
						break;
					case 11:
						get_field('visible') ? get_template_part('blocks/block11') : '';
						break;
					case 12:
						get_field('visible') ? get_template_part('blocks/block12') : '';
						break;
					case 13:
						get_field('visible') ? get_template_part('blocks/block13') : '';
						break;
					case 14:
						get_field('visible') ? get_template_part('blocks/block14') : '';
						break;
					case 15:
						get_field('visible') ? get_template_part('blocks/block15') : '';
						break;
					case 16:
						get_field('visible') ? get_template_part('blocks/block16') : '';
						break;
					case 17:
						get_field('visible') ? get_template_part('blocks/block17') : '';
						break;
					case 18:
						get_field('visible') ? get_template_part('blocks/block18') : '';
						break;
					case 19:
						get_field('visible') ? get_template_part('blocks/block19') : '';
						break;
					case 20:
						get_field('visible') ? get_template_part('blocks/block20') : '';
						break;
					case 21:
						get_field('visible') ? get_template_part('blocks/block21') : '';
						break;
					case 22:
						get_field('visible') ? get_template_part('blocks/block22') : '';
						break;
					case 23:
						get_field('visible') ? get_template_part('blocks/block23') : '';
						break;
					case 24:
						get_field('visible') ? get_template_part('blocks/block24') : '';
						break;
					case 25:
						get_field('visible') ? get_template_part('blocks/block25') : '';
						break;
				}
			}

			wp_reset_postdata(); // сброс
		?>
	</main>

<?php get_footer(); ?>