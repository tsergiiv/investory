<?php get_header(); ?>

	<!-- CONTENT -->
	<!-- #1 Enrich, Transform, Secure & Deliver Quality Data -->
	<!-- #2 Unique Value Proposition -->
	<!-- #3 What We Know Today -->
	<!-- #4 Technology Now Vs Future -->
	<!-- #5 Where Global Data Governance Future Is -->
	<!-- #6 Where Enterprise Data Managment Future Is -->
	<!-- #7 Value We Deliever -->

	<main>
		<?php
			$posts = get_posts( array(
					'numberposts' => 10,
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
				}
			}

			wp_reset_postdata(); // сброс
		?>

		<section class="section-solve">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Problems We Solve
						</h3>
					</div>
					<div class="solve-wrapper grid">
						<div class="solve-item">
							<div class="solve-item__img flex align-center justify-center relative">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/optimize.svg" alt="We solve">
							</div>
							<div class="solve-item__title gilroy">Optimize</div>
							<div class="solve-item__description">
								Improve performance and control costs across the full IT environment from legacy systems to Cloud
							</div>
						</div>
						<div class="solve-item">
							<div class="solve-item__img flex align-center justify-center  relative">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/assure.svg" alt="We solve">
							</div>
							<div class="solve-item__title gilroy">Assure</div>
							<div class="solve-item__description">
								Increase data availability and provide security as the world moves to accessing data in 24x7 time frames and data protection becomes mission critical
							</div>
						</div>
						<div class="solve-item">
							<div class="solve-item__img flex align-center justify-center  relative">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/integrate.svg" alt="We solve">
							</div>
							<div class="solve-item__title gilroy">Integrate</div>
							<div class="solve-item__description">
								Connect today’s data infrastructure with tomorrow’s technology – and ensure data quality – powering machine learning, AI and predictive analytics
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-solutions" class="section-solutions">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative">Platform and Solutions</h3>
					</div>
					<div class="solutions-list grid">
						<div class="solutions-item flex flex-column relative">
							<div class="solutions-item__img flex align-center justify-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-1.png" alt="We deliver">
							</div>
							<div class="relative">
								SaaS that will provide API/data transfer tools and AI integrations to collect and transfer data to and from a range of enterprise-wide systems
							</div>
						</div>
						<div class="solutions-item flex flex-column relative">
							<div class="solutions-item__img flex align-center justify-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-2.png" alt="We deliver">
							</div>
							<div class="relative">
								IaaS that manages the secure transfer and transformation of data from one network to another
							</div>
						</div>
						<div class="solutions-item flex flex-column relative">
							<div class="solutions-item__img flex align-center justify-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-3.png" alt="We deliver">
							</div>
							<div class="relative">
								Solution that will focus on cloud-based services (hybrid cloud, multi-cloud, single cloud protocols) and will establish connection to in-house databases, and other custom applications and data
							</div>
						</div>
						<div class="solutions-item flex flex-column relative">
							<div class="solutions-item__img flex align-center justify-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/solutions-4.png" alt="We deliver">
							</div>
							<div class="relative">
								Solution that offers a higher level of confidence in security and control than custom, decentralized legacy data processes or systems
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-features">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex  justify-center">
						<h3 class="relative">Key features will include:</h3>
					</div>
					<div class="features-list grid">
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-1.svg" alt="Features">
							</div>
							<div class="relative">
								Data transformation, enrichment, reporting and quality control capabilities
							</div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-2.svg" alt="Features">
							</div>
							<div class="relative">
								Auditability
							</div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-3.svg" alt="Features">
							</div>
							<div class="relative">
								Real time visibility of business operations
							</div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-4.svg" alt="Features">
							</div>
							<div class="relative">
								Automation of data transfer-related activities and processes
							</div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-5.svg" alt="Features">
							</div>
							<div class="relative">
								End-to-end security intelligence
							</div>
						</div>
						<div class="features-item flex flex-column align-center relative animated-icons-simple">
							<div class="features-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/features-6.svg" alt="Features">
							</div>
							<div class="relative">
								Front-end analytics and visualization tools
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-architecture">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex  justify-center">
						<h3 class="relative">High Level Solution Architecture</h3>
					</div>
					<div class="architecture-items-overflow scrollbar-map relative">
						<div class="architecture-items relative">
							<div class="architecture-item __dbms">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dbms.png" alt="DBMS">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<li>Oracle</li>
										<li>SQL</li>
										<li>Svr</li>
										<li>Db2</li>
									</ul>
								</div>
								<div class="architecture-item__text __dbms">DBMS (Oracle, SQL, Svr, Db2)</div>
							</div>
							<div class="architecture-item __data">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/data-exchange.svg" alt="Data Exchange Servers">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<li>Decrypted Data ready to load</li>
									</ul>
								</div>
							</div>
							<div class="architecture-item __client">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/client-service.svg" alt="Client Service Zone">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<li>Job/ECS Schedulling</li>
										<li>API</li>
										<li>SFTP</li>
										<li>FTP(S)</li>
										<li>HTTP(S)</li>
										<li>PeSIT* Open VPN</li>
									</ul>
								</div>
							</div>
							<div class="architecture-item __external">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/external.png" alt="External Partners">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<li class="architecture-item__title">Source DBMS</li>
										<li>Oracle</li>
										<li>SQL</li>
										<li>Svr</li>
										<li>Db2</li>
									</ul>
								</div>
							</div>
							<div class="architecture-item __dedicated">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/dedicated.svg" alt="Dedicated Servicing Solutions">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<li>Client Focused Schemas</li>
										<li>Code/ETL Repository</li>
										<li>Risk/Complience</li>
										<li>Database</li>
										<li>Data Driven Repository</li>
									</ul>
								</div>
							</div>
							<div class="architecture-item __proprietary">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/proprietary.svg" alt="Proprietary Servicing Solutions">
								<div class="architecture-item__popup">
									<ul class="architecture-popup__inner flex flex-column align-center justify-center">
										<li>Configuration Manager</li>
										<li>Change Selector</li>
										<li>DB Logs</li>
										<li>Job Repository</li>
										<li>Code Repository</li>
										<li>ETL Layer / Custom Script</li>
										<li>Security Controls</li>
										<li>Identify Manager</li>
										<li>Fraud & Risk Repository</li>
										<li>Domain Focudes Schemas</li>
									</ul>
								</div>
							</div>
							<div class="architecture-item __api">
								API/Daily Feeds
							</div>
							<img src="<?php bloginfo('template_url'); ?>/assets/img/scheme-example.png" alt="">
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
		<section class="section-fintech">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative">Solutions for FinTech</h3>
					</div>
					<div class="fintech-list grid">
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-1.svg" alt="Blockchain/Crypto">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Blockchain/Crypto
                                    </span>
								Companies leveraging blockchain technologies for financial services
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-2.svg" alt="Money Transfer">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Money Transfer
                                    </span>
								International money transfer and tracking software
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-3.svg" alt="Insurance">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Insurance
                                    </span>
								Companies selling insurance difitally or providing data amalytics and software for (re)insurers
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-4.svg" alt="Payments Billing">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Payments Billing
                                    </span>
								Payments processing, card developers, & subscription billing software tools
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-5.svg" alt="Capital Markets">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Capital Markets
                                    </span>
								Seles & trading, analysis, and infrastructure tools for financial institutions
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-6.svg" alt="Lending">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Lending
                                    </span>
								Marketplace lending & alternative underwriting platforms
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-7.svg" alt="Regtech">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Regtech
                                    </span>
								Audit, risk, and regulatory cpmpliance software
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-8.svg" alt="Wealth Management">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Wealth Management
                                    </span>
								Investment and wealth management platforms and analytics tools
							</div>
						</div>
						<div class="fintech-item flex flex-column relative animated-icons-simple">
							<div class="fintech-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/fintech-9.svg" alt="Mortgage / Real Estate">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Mortgage / Real Estate
                                    </span>
								Mortgage lending, digirization and financing platforms
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-business" class="section-business">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Business Model
						</h3>
					</div>
					<div class="business-wrapper grid">
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy">Value Proposition</span>
								Faster and more secure Real Time data processing, improved transformation quality,
								AI data enrichment.<br>
								Risk, audit and compliance insights via user friendly interface, reduction of headcount and manual effort.
							</div>
						</div>
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy">Channels</span>
								FinTech-focused Business Relationship marketing model (insetive-based deals).
							</div>
						</div>
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy">Our Relationships</span>
								FI Account Executives and decision makers, Business Relationship managers within FinTech space.
							</div>
						</div>
						<div class="business-item">
							<div class="relative flex flex-column">
								<span class="gilroy">Prospects and Clients</span>
								Stage 1: Small to mid-tier corporate clients and privately held FIs within target market segment in North America Stage 2: Globally operated FIs within target market segment in EMEA and APAC.
							</div>
						</div>
						<div class="business-item-last grid">
							<div class="business-item">
								<div class="relative flex flex-column">
									<span class="gilroy">Key Resources</span>
									Global, subject to client demand and operating constraints. Key Roles: Program Technology Managers, Project Managers, BIG Data Developers, Data Analytic Experts and Cloud Security SMEs.
								</div>
							</div>
							<div class="business-item">
								<div class="relative flex flex-column">
									<span class="gilroy">Discovery Sessions</span>
									Meetings at workplaces to understand business processes and challenges; Data Analytics - investigation of data from various streams.

									Use Case and Pilot Setup - create use cases, solution illustrrations and product trial with training and support.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-success" class="section-success">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative">Success Story</h3>
					</div>
					<div class="success-list grid">
						<div class="success-item">
							<div class="success-item__img">
								<img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/img/success-1.png" alt="Proactive communication and collaboration">
								<img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/img/success-1-mobile.png" alt="Proactive communication and collaboration">
							</div>
							<div class="success-item__title gilroy">Proactive communication and collaboration</div>
							<ul class="success-item__description">
								<li class="flex">Pre-empt the need for escalation</li>
								<li>Understand customer experience and address needs
									<ul>
										<li>training/services gaps</li>
										<li>product/process improvements</li>
									</ul>
								</li>
								<li class="flex">Partner with customers on use cases & projects to leverage and maximize product investment</li>
							</ul>
						</div>
						<div class="success-item">
							<div class="success-item__img">
								<img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/img/success-2.png" alt="Internal coordination and customer point person">
								<img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/img/success-2-mobile.png" alt="Internal coordination and customer point person">
							</div>
							<div class="success-item__title gilroy">Internal coordination and customer point person</div>
							<ul class="success-item__description">
								<li class="flex">Manage internal resources</li>
								<li class="flex">Customer advocate</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-projects">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">Success Projects</h3>
					</div>
					<div class="projects-list owl-carousel">
						<div class="projects-item">
							<div class="projects-item__img flex align-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/tdbank.svg" alt="TD Bank">
							</div>
							<div class="projects-item__title gilroy">TD Bank</div>
							<div class="projects-item__description">
								Data Transformation Tools, Data Management, Risk and Regulatory platforms
							</div>
						</div>
						<div class="projects-item">
							<div class="projects-item__img flex align-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/bmobank.svg" alt="BMO  Bank of Montreal">
							</div>
							<div class="projects-item__title gilroy">BMO  Bank of Montreal</div>
							<div class="projects-item__description">
								Regulatory Data Management, Custom Reports, Compliance Process Improvements,  Risk Technologies and Salvage Failing Projects
							</div>
						</div>
						<div class="projects-item">
							<div class="projects-item__img flex align-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/cibc.svg" alt="Canadian Imperial Bank of Commerce">
							</div>
							<div class="projects-item__title gilroy">Canadian Imperial Bank of Commerce</div>
							<div class="projects-item__description">
								Financial Interfaces, UI/UX, Implementation of Custom Reports and Business Intelligence Tools
							</div>
						</div>
						<div class="projects-item">
							<div class="projects-item__img flex align-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/ontarioteachers.svg" alt="Ontario Teachers' Pension Plan">
							</div>
							<div class="projects-item__title gilroy">Ontario Teachers'. Pension Plan</div>
							<div class="projects-item__description">
								Big Data Transformation, Risk Technologies, Data Management
							</div>
						</div>
						<div class="projects-item">
							<div class="projects-item__img flex align-center">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/citi.svg" alt="Citigroup">
							</div>
							<div class="projects-item__title gilroy">Citigroup</div>
							<div class="projects-item__description">
								Regulare Reporting Application Management, Data Management and Reporting, Data Quality Improvements
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-invest">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex">
						<h3 class="relative">Why Invest with Us</h3>
					</div>
					<div class="invest-list grid">
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-1.svg" alt="Expertise">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Safety
                                    </span>
								Repository of working artifacts proprietary to Investory (Not a "Project Zero" investment)
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-2.svg" alt="Relationships">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Relationships
                                    </span>
								Established relationships with FinTechs and Top Tier Banks within Canada and US
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-3.svg" alt="Timelines">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Timelines
                                    </span>
								Ability to deliver high quality results within aggressive timelines
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-4.svg" alt="Strong Teams">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Strong Teams
                                    </span>
								Strong Business Development Teams (NA, EMEA and APAC as a prospect)
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-5.svg" alt="Agile Environment">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Agile Environment
                                    </span>
								Agile Environment with incremental delivery checkpoints
							</div>
						</div>
						<div class="invest-item flex flex-column relative animated-icons-simple">
							<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-6.svg" alt="Knowledge">
							</div>
							<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Knowledge
                                    </span>
								Knowledge of wide range Enterprise Solution Delivery tools and methodologies
							</div>
						</div>
						<div class="invest-item__last grid">
							<div class="invest-item flex flex-column relative animated-icons-simple">
								<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-7.svg" alt="Project Management">
								</div>
								<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Project Management
                                    </span>
									Proven client-focused approach with deligated tech resources based on Client needs
								</div>
							</div>
							<div class="invest-item flex flex-column relative animated-icons-simple">
								<div class="invest-item__img flex align-center justify-center animated-icons-simple__img">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/invest-9.svg" alt="Security & compliance">
								</div>
								<div class="flex flex-column relative">
                                    <span class="gilroy">
                                        Security & Compliance
                                    </span>
									High emphasis on data security and compliance
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-chart relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Investory's Org Chart
						</h3>
					</div>
					<div class="chart-list grid">
						<div class="chart-scheme gilroy">
							<div class="chart-item chart-level__1 flex relative">
								CEO / CTO
							</div>
							<div class="chart-item chart-level__2 flex relative">
								Business Development  Team
							</div>
							<div class="chart-level__3 relative">
								<div class="chart-item level-3__item flex relative">
									Dev / QA Resources
								</div>
								<div class="chart-item level-3__item flex relative">
									Legal / CFO
								</div>
								<div class="chart-item level-3__item flex relative">
									Client Relationship  / Support Team
								</div>
							</div>
						</div>
						<div class="chart-info">
							<h4>Mission Statement</h4>
							<div class="chart-info__description">
								To help customers enrich and simplify their data analytics with the focus on data security, quality and availability.
								<br><br>
								To continuously develop algorithmic models and capabilities that predict future business momentums.
								<br><br>
								To enable secured data collaboration and exchange via SFTP protocols and API channels with the focus on flexible and reliable cybersecurity control.
							</div>
							<h4>Vision Statement</h4>
							<div class="chart-info__description">
								To become Cloud Security focused within Big Data infrastructure and a "single-stop" API/AI-enabled technology provider within global FinTech space.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-market" class="section-market relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Market Overview
						</h3>
					</div>
					<div class="market-list grid scrollbar-map scrollbar-map-market">
						<div class="market-list__item">
							<div class="market-item__title gilroy">History of US VC Deals</div>
							<div class="market-item__img">
								<img class="mw-100" src="<?php bloginfo('template_url'); ?>/assets/img/market-1.png" alt="History of US VC Deals">
								<img class="mw-100" src="<?php bloginfo('template_url'); ?>/assets/img/market-1-tablet.png" alt="History of US VC Deals">
							</div>
							<div class="market-item__tips flex justify-center">
								<div class="market-item__tip flex flex-column align-center justify-center">Exit Size</div>
								<div class="market-item__tip flex flex-column align-center justify-center">Exit count</div>
							</div>
							<div class="bot-tip">
								Source: PitchBook *As of Dec. 14
							</div>
						</div>
						<div class="market-list__item">
							<div class="market-item__title gilroy">History of US VC-backed IPOs:</div>
							<div class="market-item__img">
								<img class="mw-100" src="<?php bloginfo('template_url'); ?>/assets/img/market-2.png" alt="History of US VC-backed IPOs">
								<img class="mw-100" src="<?php bloginfo('template_url'); ?>/assets/img/market-2-tablet.png" alt="History of US VC-backed IPOs">
							</div>
							<div class="market-item__tips flex justify-center">
								<div class="market-item__tip flex flex-column align-center justify-center">Exit Size</div>
								<div class="market-item__tip flex flex-column align-center justify-center">Exit count</div>
							</div>
							<div class="bot-tip">
								Source: PitchBook *As of Dec. 15<br>
								Note: Exit size represents company pre-valuations at time of IPO
							</div>
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
		<section class="section-fundings relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Market Size, Acquisitions and Funding
						</h3>
						<div class="title-tip">
							Acquisitions and Funding
						</div>
					</div>
					<div class="table-light grid scrollbar-map scrollbar-map-light">
						<?= do_shortcode('[table id=1 /]') ?>
						<table>
							<thead>
							<tr>
								<th></th>
								<th>Data Integration Startups Acquired or Gone Public</th>
								<th>Cloud Management Companies</th>
								<th>US Identity Management Companies</th>
								<th>IaaS Companies</th>
								<th>SaaS Companies with Early Stage Venture Funding</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Number of Organizations</td>
								<td class="bold">246</td>
								<td class="bold">1,364</td>
								<td class="bold">615</td>
								<td class="bold">374</td>
								<td class="bold">1,326</td>
							</tr>
							<tr>
								<td>Industry Classification</td>
								<td>Data and Analytics, Information Technology, Software</td>
								<td>Information Technology, Internet Services, Software</td>
								<td>Information Technology, Privacy and Security</td>
								<td>Software</td>
								<td>SaaS</td>
							</tr>
							<tr>
								<td>Percentage Acquired / Number of Aquisitions</td>
								<td class="bold flex align-center">91%</td>
								<td class="bold flex align-center">10%</td>
								<td class="bold flex align-center">16%</td>
								<td class="bold flex align-center">14%</td>
								<td class="bold flex align-center">139</td>
							</tr>
							<tr>
								<td>Total Funding Amount</td>
								<td class="bold">$4.4B</td>
								<td class="bold">$9.2B</td>
								<td class="bold">$4.9B</td>
								<td class="bold">$4.5B</td>
								<td class="bold">$21.7B</td>
							</tr>
							<tr>
								<td>Top Funding Types</td>
								<td>Venture - Series Unknown, Seed, Series B, Private Equity, Series C</td>
								<td>Seed, Venture - Series Unknown, Series A, Series B, Private Equity</td>
								<td>Seed, Venture - Series Unknown, Series A, Series B, Angel</td>
								<td>Private Equity Firm, Venture Capital, Accelerator, Entrepreneurship Program</td>
								<td>Venture Capital, Corporate Venture Capital</td>
							</tr>
							</tbody>
						</table>
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
		<section class="section-overview relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Competitive Overview
						</h3>
					</div>
					<div class="table-dark grid scrollbar-map scrollbar-map-dark">
						<table>
							<thead>
							<tr>
								<th></th>
								<th>Snowflake</th>
								<th>Sumo Logic</th>
								<th>Precisely (former Syncsort)</th>
								<th>Axway</th>
								<th>Blackline<br><span>Benchmark</span></th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Founded In</td>
								<td>2012</td>
								<td>2010</td>
								<td>1992 (rebranded in May 2020)</td>
								<td>374</td>
								<td>1,326</td>
							</tr>
							<tr>
								<td>Current Status</td>
								<td>Public Since 2020</td>
								<td>Public Since 2020</td>
								<td>Private</td>
								<td>Public Since 2011</td>
								<td>Public Since 2016</td>
							</tr>
							<tr>
								<td>Initial Funding</td>
								<td>900K</td>
								<td>$15 million (Jan 2012)</td>
								<td>Private Data</td>
								<td>Private Data</td>
								<td>$200 million (2013)</td>
							</tr>
							<tr>
								<td>IPO Funding</td>
								<td>$1.4B</td>
								<td>$325.6 million</td>
								<td>N/A</td>
								<td>N/A</td>
								<td>$146 million (2016)</td>
							</tr>
							<tr>
								<td>Revenues</td>
								<td>$538 - $543 millions</td>
								<td>~$155 million</td>
								<td>~$600 million</td>
								<td>€298 million</td>
								<td>289 million USD (2019)</td>
							</tr>
							<tr>
								<td>Current Market Cap</td>
								<td>over $90 billion</td>
								<td>~$3.9B</td>
								<td>N/A</td>
								<td>€434.963 million</td>
								<td>$3.5 billion</td>
							</tr>
							<tr>
								<td></td>
								<td><a href="#" data-toggle="modal-snowflake" class="modal-toggle table-link relative flex align-center justify-center">More info</a></td>
								<td><a href="#" data-toggle="modal-sumo" class="modal-toggle table-link relative flex align-center justify-center">More info</a></td>
								<td><a href="#" data-toggle="modal-precisely" class="modal-toggle table-link relative flex align-center justify-center">More info</a></td>
								<td><a href="#" data-toggle="modal-axway" class="modal-toggle table-link relative flex align-center justify-center">More info</a></td>
								<td><a href="#" data-toggle="modal-blackline" class="modal-toggle table-link relative flex align-center justify-center">More info</a></td>
							</tr>
							</tbody>
						</table>
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
		<section class="section-financial relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Financials
						</h3>
						<div class="title-tip">
							Profits by Business Segment
						</div>
					</div>
					<div class="table-dark-alt table-light-alt grid scrollbar-map scrollbar-map-dark-alt">
						<table>
							<thead>
							<tr>
								<th>For the Fiscal Period Ending</th>
								<th>Dec-31-2022</th>
								<th>Dec-31-2023</th>
								<th>Dec-31-2024</th>
								<th>Dec-31-2025</th>
								<th>CAGR</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Currency</td>
								<td><div class="flex w-100 justify-between"><span>USD</span><span>% Allocation</span></div></td>
								<td><div class="flex w-100 justify-between"><span>USD</span><span>% Allocation</span></div></td>
								<td><div class="flex w-100 justify-between"><span>USD</span><span>% Allocation</span></div></td>
								<td><div class="flex w-100 justify-between"><span>USD</span><span>% Allocation</span></div></td>
								<td>USD</td>
							</tr>
							<tr>
								<td>Revenue in 000’s</td>
								<td>2,100</td>
								<td>4,4100</td>
								<td>7,100</td>
								<td>10,231</td>
								<td>24,097</td>
							</tr>
							<tr>
								<td>License</td>
								<td><div class="flex w-100 justify-between"><span>105</span><span>5%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>308</span><span>7%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>705</span><span>10%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>1,227</span><span>12%</span></div></td>
								<td>2,347.3</td>
							</tr>
							<tr>
								<td>Subscriptions</td>
								<td><div class="flex w-100 justify-between"><span>420</span><span>20%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>970</span><span>22%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>1,552</span><span>22%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>2,353</span><span>23%</span></div></td>
								<td>5,356.5</td>
							</tr>
							<tr>
								<td>Maintenance</td>
								<td><div class="flex w-100 justify-between"><span>315</span><span>15%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>705</span><span>16%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>1,622</span><span>23%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>2,557</span><span>25%</span></div></td>
								<td>5,247</td>
							</tr>
							<tr>
								<td>Technology Services</td>
								<td><div class="flex w-100 justify-between"><span>1,260</span><span>60%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>2,425</span><span>55%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>3,175</span><span>45%</span></div></td>
								<td><div class="flex w-100 justify-between"><span>4,092</span><span>40%</span></div></td>
								<td>11,150.4</td>
							</tr>
							<tr>
								<td>Total Revenues</td>
								<td><div class="flex w-100 justify-between"><span>$ 2,100</span><span>1</span></div></td>
								<td><div class="flex w-100 justify-between"><span>$ 4,4100</span><span>1</span></div></td>
								<td><div class="flex w-100 justify-between"><span>$ 7,056</span><span>1</span></div></td>
								<td><div class="flex w-100 justify-between"><span>$ 10,231</span><span>1</span></div></td>
								<td>24,102.2</td>
							</tr>
							</tbody>
						</table>
						<div class="scroll-element_outer">
							<div class="scroll-element_size">
								<div class="scroll-element_track"></div>
								<div class="scroll-bar"></div>
							</div>
						</div>
					</div>
					<div class="table-file flex align-center justify-center"><a href="<?php bloginfo('template_url'); ?>/assets/files/Profits%20by%20Business%20Segment.xlsx" download="Profits by Business Segment" class="flex align-center"><span>Profits by Business Segment</span></a></div>
				</div>
			</div>
		</section>
		<section class="section-financial-dark relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative">
							Financials
						</h3>
						<div class="title-tip">
							Project Income and Projected Expenses
						</div>
					</div>
					<div class="table-dark-alt table-ligh-alt grid scrollbar-map scrollbar-map-light-alt">
						<table>
							<thead>
							<tr>
								<th>For the Fiscal Period Ending</th>
								<th>2021 (8 months)</th>
								<th>Headcount 2022</th>
								<th>2022</th>
								<th>Headcount 2023</th>
								<th>2023</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Total Project Execution Expense </td>
								<td>$ 811,667</td>
								<td></td>
								<td>$ 1,718,333</td>
								<td></td>
								<td>$ 1,718,333</td>
							</tr>
							<tr>
								<td>Contingency (15%)</td>
								<td>$ 121,750</td>
								<td></td>
								<td>$ 257,750</td>
								<td></td>
								<td>$ 257,750</td>
							</tr>
							<tr>
								<td>Totals</td>
								<td>$ 933,416.67</td>
								<td>112%</td>
								<td>$ 1,976,083.33</td>
								<td>20%</td>
								<td>$ 1,976,083.33</td>
							</tr>
							<tr>
								<td>Revenue</td>
								<td>$ 300,000</td>
								<td>600%</td>
								<td>$ 2,100,000</td>
								<td>110%</td>
								<td>$ 2,100,000</td>
							</tr>
							<tr>
								<td>Business development-Revenue-Driven</td>
								<td>$ 45,000</td>
								<td></td>
								<td>$ 168,000</td>
								<td></td>
								<td>$ 168,000</td>
							</tr>
							<tr>
								<td>Net-Income</td>
								<td>$ 521,583</td>
								<td></td>
								<td>$ 477,500</td>
								<td></td>
								<td>$ 477,500</td>
							</tr>
							<tr>
								<td>Initial capital</td>
								<td></td>
								<td>$ 521,583.33</td>
								<td>$ 10,231.20</td>
								<td></td>
								<td></td>
							</tr>
							</tbody>
						</table>
						<div class="scroll-element_outer">
							<div class="scroll-element_size">
								<div class="scroll-element_track"></div>
								<div class="scroll-bar"></div>
							</div>
						</div>
					</div>
					<div class="table-files flex align-center justify-center">
						<div class="table-file flex align-center justify-center"><a href="<?php bloginfo('template_url'); ?>/assets/files/High%20Level%20Projections.xlsx" download="High Level Projections" class="flex align-center"><span>High Level Projections</span></a></div>
						<div class="table-file flex align-center justify-center"><a href="<?php bloginfo('template_url'); ?>/assets/files/Projected%20Income%20and%20Expenses.xlsx" download="Project Income and Projected Expenses" class="flex align-center"><span>Project Income and Projected Expenses</span></a></div>
					</div>
				</div>
			</div>
		</section>
		<section id="section-news" class="section-news relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative mx-auto">
							FinTech Venture Capital News and Highlights
						</h3>
					</div>
					<div class="news-list grid">
						<div class="news-item">
							<b>Investors</b> have kicked off 2021 with big bets on fintech companies, which are seeing broad tailwinds from the adoption of digital payments and an appetite among financial institution for the latest technology.
							<br><br>
							Just two weeks into the new year, fintech startups have already recorded 10 deals worth $100 million or more, compared with three in the same period last year, according to PitchBook data. Last week alone, more than $1.7 billion in fintech startup funding was announced.
							<br><br>
							The auspicious start builds off momentum from last year, when VC-backed fintech companies raised $41.7 billion in the second-largest annual total of the pas decade, according to Pitchbook data.
							<br><br>
							“2020 was really the gradually-then-suddenly moment for fintech,” said Tripp shriner, a partner at Point72 Venture.
						</div>
						<div class="news-item">
							<b>European VC</b> deal value is astonishingly on pace to set a new annual record at year end. VC dealmaking has shown limited signs of slowing amid economic turmoil as investments in tech-based startups continue to flourish. Investor pools have grown as mature startups and hude follow-on rounds drove deal value figures upward in Q3. Regional VC hubs, especially those rich with software and pharma & biotech startups, have drawn outsized capital.
							<br><br>
							VC deals with CVC participation could exceed the annual record from 2019. VC investment from CVC arms has been aligned to winning sectors from COVID-19, such as technology and online goods or services. Incumbent corporates in mobility and software have piled capital into startups to stay abreast of disruption and exploit sygnergies.
						</div>
						<div class="news-item">
							<b>VC dealmaking in the US</b> remained incredibly resilient in 2020, with companies raising nearly $148 billion as of Dec. 14, according to PitchBook data - already a decade high.
							<br><br>
							US exchanges hosted 120 VC-backed IPOs worth a combined $259.8 billion as of Dec. 15, 2020
							<br><br>
							US startaps raised more than $156 billion of VC funding in 2020, according to the Q4 2020 PitchBook-NVCA Venture Monitor, hitting a decade high and defying the odds in an unprecedented year.
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-leader relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="title flex flex-column align-center">
						<h3 class="relative mx-auto">
							Key Leadership
						</h3>
					</div>
					<div class="leader-wrapper grid">
						<div class="leader-img grid">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/leader.png" class="mw-100" alt="Marina Berger">
							<div class="leader-info__title flex flex-column">
								<h5 class="gilroy">Marina Berger</h5>
								<div class="contacts flex">
									<div class="flex flex-column">
										<a href="https://www.linkedin.com/in/marina-berger-cbap-3604646/" target="_blank" class="flex align-center">Linkedin</a>
										<a href="<?php bloginfo('template_url'); ?>/assets/files/Marina_Berger.vcf" class="vcard flex align-center" download="vCard">vCard</a>
									</div>
									<div class="flex flex-column">
										<a href="tel:8139819043" class="flex align-center">813.981.9185</a>
										<a href="mailto:mberger@investory.com" class="flex align-center">mberger@investory.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="leader-info">
							<div class="leader-info__title flex flex-column">
								<h5 class="gilroy">Marina Berger</h5>
								<div class="contacts flex">
									<div class="flex flex-column">
										<a href="https://www.linkedin.com/in/marina-berger-cbap-3604646/" target="_blank" class="flex align-center">Linkedin</a>
										<a href="<?php bloginfo('template_url'); ?>/assets/files/Marina_Berger.vcf" class="vcard flex align-center" download="vCard">vCard</a>
									</div>
									<div class="flex flex-column">
										<a href="tel:8139819043" class="flex align-center">813.981.9185</a>
										<a href="mailto:mberger@investory.com" class="flex align-center">mberger@investory.com</a>
									</div>
								</div>
							</div>
							<div class="leader-info__description active">
								<h6 class="leader-description__title flex align-center gilroy">Biography <span class="plus relative flex align-center justify-center ml-auto"></span></h6>
								<div class="leader-description__text" style="display: block;">
									Ms. Marina Berger has over 16 years of progressive experience in Business Consulting and Enterprise Solution Delivery domains within Financial Services. Ms. Berger specializes in assessing and analyzing complex business challenges, identifying opportunities, as well as defining best tools, methodologies and strategies with the focus on continuous improvements.
									<br><br>
									In her career, Ms. Berger led medium to large scale initiatives where she was responsible for facilitating requirements discovery sessions, performing enterprise and technical analysis, setting up requirements center of excellence, assessing current business processes and implementing business process re-designs. Ms. Berger is skillful at effective client engagement and solution delivery methods with the key emphasis on quality and integrity of her work.
								</div>
							</div>
							<div class="leader-info__description">
								<h6 class="leader-description__title flex align-center gilroy">Major areas of expertise <span class="plus relative flex align-center justify-center ml-auto"></span></h6>
								<div class="leader-description__text">
									Track record in Business Consulting within Capital Markets, Market Risk, Wealth, Insurance, Banking and Enterprise Solution Delivery domains
									Strong experience working on large regulatory initiatives: CCAR, Basel, The Securities and Exchange Commission (SEC), Dodd-Frank Act Reform, IIROC, OSFI, MFDA, EMIR, FINRA Trace Reporting, The Ontario Securities Commission (OSC)
									Proficient in Best Practice Process Improvement (CMMI, RUP, LEAN)
									Continuous engagement and development in complex Enterprise Delivery projects and leading-edge technology trends
									Extensive experience and in-depth knowledge of Banking, Wealth and Capital Markets operations
									Demonstrated knowledge of policies, procedures and compliance functions within Banking environment
									Outstanding leadership, communication, analytical, problem solving and planning skills as well as positive, enthusiastic and co- operative attitude
									Exceptional mining, research, modeling, and forecasting capabilities
									Influential Skills, Risk Management and Salvage Failing Projects
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-era relative">
			<div class="container-main">
				<div class="container-inner">
					<div class="era-wrapper relative flex flex-column">
						<div class="title flex flex-column">
							<h3 class="relative mr-auto">
								Start new era of data
							</h3>
						</div>
						<a href="#" data-toggle="modal-contacts" class="modal-toggle button flex align-center justify-center mt-auto">Let's Connect!</a>
						<img src="<?php bloginfo('template_url'); ?>/assets/img/background-era.png" alt="Start new era of data">
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>