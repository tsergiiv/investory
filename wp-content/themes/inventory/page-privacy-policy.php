<?php get_header('other'); ?>

	<div class="page page_info">
		<div class="page__page-info page-info">
			<div class="page-info__container container"><a class="page-info__link-home icon-prew-arrow"
			                                               href="<?= get_bloginfo("url"); ?>"><span>BACK</span></a>
				<h1 class="title-page">Privacy Policy</h1>
				<div class="page-info__body-block"><p>At Business Debt Adjusters, LLC, we take our ethical
						responsibilities and your privacy seriously. We have a strong commitment to providing excellent
						service to all our customers and visitors of this Web site, including respecting your concerns
						about
						privacy. This Privacy Policy discloses how we collect, protect, use and share information
						gathered
						about you on our website. If you use this site you explicitly agree to the terms and conditions
						of
						the Privacy Policy in effect at the time of your use. We hope that this disclosure will help
						increase your confidence in our website and enhance your experience on the Internet. Therefore,
						in
						compliance with industry standards and regulations enforced typically by the Federal and State
						Governments, we abide the following privacy policy.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Browsing</div>
					<p>This website does not collect personally identifiable information from your computer when you
						browse this website and request pages from our servers. This means that, unless you voluntarily
						and knowingly provide us with personally identifiable information, we will not know your name,
						your email address, or any other personally identifiable information. We may use IP addresses,
						browser types and access times to analyze trends, administer the site, improve site performance
						and gather broad demographic information for aggregate use. When you request a page from our
						website, our servers log the information provided in the HTTP request header including the IP
						number, the time of the request, the URL of your request, and other information that is provided
						in the HTTP header. We collect the HTTP request header information in order to make our website
						function correctly and provide you the functionality that you see on this website. We also use
						this information to better understand how visitors use our website and how we can better tune
						it, its contents and functionality to meet your needs.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Information We Collect and Its Uses</div>
					<p>We collect your personal information if you decide to purchase one of our products or retain our
						services, participate in our affiliate marketing program, subscribe to our newsletter, complete
						an application form, participate in one of our surveys or transact other business with us. We
						need to collect personally identifiable information from you to execute the requested
						transaction, provide you with a particular service, and/or to further enhance your account. At
						anytime, we may ask you to voluntarily supply us with additional information needed. We will ask
						you for information such as, but not limited to: name, current and/or billing address, your
						e-mail address, telephone number, your Social Security number and certain other personal
						information, such as your date of birth, address, employment information, and certain credit
						card and loan account information. We may use your email address to send a confirmation and, if
						necessary, we might use the other information to contact you for help in processing.</p>
					<p>In addition, when you provide contact details for transaction requests such as scheduling an
						appointment or requesting a proposal, we may use the contact information to keep you updated
						about future offers or promotions unless you opt-out online or otherwise notify us. Under no
						circumstances will Business Debt Adjusters, LLC, sell or share your personal information with
						any person or organization ("third party") except: as authorized by you, our participating
						lenders, agents, and debt management firms depending on the application you fill out and the
						information you request.</p>
					<p>We may also use the information we collect about you in order to, but not limited to:</p>
					<ul>
						<li>learn more about your interest in the products or services we offer and provide you with
							information
						</li>
						<li>enroll customers who desire our services</li>
						<li>open customer files and establish their accounts</li>
						<li>provide customer service</li>
						<li>negotiate settlement of our customers' debts (according to the terms and conditions of their
							written agreements)
						</li>
						<li>learn how to improve our products or services</li>
						<li>provide opportunities for our affiliates and other companies to inform you about the
							products or services they offer that may interest you
						</li>
						<li>to share aggregated statistical data with our business partners or for public relations. For
							example, we may disclose that a specific percentage of our users are between the ages of 30
							and 40. This information is not disclosed to third parties.
						</li>
					</ul>
				</div>
				<div class="page-info__body-block">
					<div class="page-info__title">Disclosure of Information to Participating Providers of Services</div>
					<p>We may disclose a consumer's personally identifiable information in order to effect or carry out
						any transaction that you have requested of us or as necessary to complete our contractual
						obligations with you. WE RESERVE THE RIGHT TO SELL, RENT OR TRANSFER YOUR PERSONAL INFORMATION
						TO our participating providers, as authorized by you, which include: lenders, agents, and debt
						management firms FOR ANY PURPOSE IN OUR SOLE DISCRETION. We prohibit the sale or transfer of
						personal information to non-affiliated entities for their use without giving you the opportunity
						to opt-out (See Opt-Out below). We may share your personally identifiable information with
						affiliated companies that are directly or indirectly controlled by, or under common control of
						Business Debt Adjusters, LLC. We may send personally identifiable information about you to
						non-affiliated companies that are not directly or indirectly controlled by, or under common
						control of, Business Debt Adjusters, LLC. The personal information collected on this site and by
						participating providers will be used to operate the site and to provide the services or products
						or carry out the transactions you have requested or authorized. We may change or broaden the use
						of your personal information at any time. We may use your personal information to provide
						promotional offers to individuals by means of email advertising, telephone marketing, direct
						mail marketing, banner advertising, and other possible uses.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Choice/Opt-out</div>
					<p>We provide you the opportunity to 'opt-out' of having your personally identifiable information
						used for certain purposes, when we ask for this information. For example, if you purchase a
						product/service but do not wish to receive any additional marketing material from us, you can
						indicate your preference by emailing or calling us per the information contained on our contact
						page.</p>
					<p>If you no longer wish to receive our newsletter, you may opt-out of receiving it by following the
						instructions included in each newsletter or communication or by emailing or calling us per the
						information contained on our contact page.</p>
					<span>Customer Care Contact Information:</span>
					<span>Business Debt Adjusters, LLC</span>
                    <?php
                    $posts = get_posts( array(
                        'numberposts' => 1,
                        'post_type'   => 'contact',
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        // формат вывода the_title() ...
                        ?>

	                    <span>Phone: <a class="info-contact__info" href="tel:<?= the_field('phone_number') ?>"><?= the_field('phone_number') ?></a></span>

                        <?php
                    }

                    wp_reset_postdata();
                    ?>
					<span>Email: Intakes@businessdebtadjustsers.com</span>
				</div>
				<div class="page-info__body-block">
					<div class="page-info__title">Additional Service Providers</div>
					<p>We may use affiliates or contractors to provide certain clerical and information processing and
						shipping services on our site. When you sign up for our services, we will share only as much
						information as is necessary for the provision of those services.</p>
					<p>These parties are prohibited from using your personally identifiable information for any other
						purpose.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Securing the Transmission and Storage of Information</div>
					<p>The security of your personal information is extremely important to us. We employ generally
						accepted industry standards to protect the personal information submitted to us, both during
						transmission and once we receive it.</p>
					<p>Our site uses security technology to protect information you provide to us through the site when
						entering sensitive information.</p>
					<p>After information reaches Business Debt Adjusters, LLC, it is stored on a secure server that
						resides behind firewalls designed to block unauthorized access from outside of Business Debt
						Adjusters, LLC.com. You can help to maintain the security of your online transactions by not
						sharing your personal information with anyone.</p>
					<p>Remember, no method of transmission over the Internet, or method of electronic storage, is 100%
						secure. (Example: any information you provide us by email is not encrypted) Therefore, while we
						strive to use commercially acceptable means to protect your personal information, we cannot
						guarantee its absolute security.</p>
					<p>If you have any questions about the security on our Web site, please feel free to e-mail us at
						intakes@businessdebtadjusters.com</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Log Files</div>
					<p>As is true of most Web sites, we gather certain information automatically and store it in log
						files. This information includes internet protocol (IP) addresses, browser type, internet
						service provider (ISP), referring/exit pages, operating system, date/time stamp, and click
						stream data.</p>
					<p>We use this information, which does not identify individual users, to analyze trends, to
						administer the site, to track users' movements around the site and to gather demographic
						information about our user base as a whole. We do not link this automatically-collected data to
						personally identifiable information.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Cookies</div>
					<p>A cookie is a small text file that is stored on a user's computer for record-keeping purposes. We
						use cookies on this site. We do not link the information we store in cookies to any personally
						identifiable information you submit while on our site.</p>
					<p>We use session ID cookies. We use session cookies to make it easier for you to navigate our site.
						A session ID cookie expires when you close you browser. If you reject cookies, you may still use
						our site, but your ability to use some areas of our site, such as contests or surveys, will be
						limited.</p>
					<p>Some of our business partners (e.g., advertisers) use cookies on our site. We have no access to
						or control over these cookies.</p>
					<p>This privacy statement covers the use of our cookies only and does not cover the use of cookies
						by any advertisers.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Clear Gifs (Web Beacons/Web Bugs)</div>
					<p>We employ a software technology called clear gifs (a.k.a. Web Beacons/Web Bugs), that help us
						better manage content on our site by informing us what content is effective. Clear gifs are tiny
						graphics with a unique identifier, similar in function to cookies, and are used to track the
						online movements of Web users. In contrast to cookies, which are stored on a user's computer
						hard drive, clear gifs are embedded invisibly on Web pages and are about the size of the period
						at the end of this sentence. We do not tie the information gathered by clear gifs to our
						customers' personally identifiable information.</p>
					<p>We use clear gifs in our HTML-based emails to let us know which emails have been opened by
						recipients. This allows us to gauge the effectiveness of certain communications and the
						effectiveness of our marketing campaigns. If you would like to opt-out of these emails, please
						contact us.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Links to Other Sites</div>
					<p>This Web site may contain links to other sites such as our affiliates which are not owned or
						controlled by us. Please be aware that this privacy policy only addresses our company's use and
						disclosure of your information collected on this site.</p>
					<p>While we try to link only to sites that share our standards and respect for privacy, we are not
						responsible for the privacy practices of such other sites. We encourage you to be aware when you
						leave our site and to read the applicable privacy policies and terms of conditions of each and
						every Web site that collects personally identifiable information.</p>
					<p>This privacy statement applies only to information collected by this Web site.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Co-branded sites</div>
					<p>We may be co-branded with "partners and affiliates". These business to business relationships are
						helpful to us and to you as they afford all concerned with greater product and service
						opportunities. We always provide opt-out opportunities regarding the sharing of your information
						with such partners and affiliates. Please note the sites linked to our site are governed by
						their own privacy policies which may or may not reach the standards set by our company.</p>
				</div>
				<div class="page-info__body-block">
					<div class="page-info__title">Access to Personally Identifiable Information</div>
					<p>If your personally identifiable information changes, or if you no longer desire our product or
						service, you may correct, update, delete or deactivate same by emailing our Customer Care by
						contacting us by telephone or postal mail at the contact information listed below.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Customer Care</div>
					<p>If you send us correspondence, including e-mails and faxes, we may retain such information in
						your customer file. Information you give us over the telephone may be noted for your file. We
						may also keep copies of any correspondence sent to you. We retain these records in order to
						provide the products and services you have requested and to measure and improve our customer
						service. We may, over time, delete these records as permitted by law. Phone calls may be
						recorded or monitored for customer satisfaction purposes.</p>
					<p>Based upon the personally identifiable information you provide, we may communicate with you to
						provide the services you request, and to manage your account. We may communicate via email or
						telephone, in accordance with your wishes.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Legal Disclaimer</div>
					<p>We reserve the right to disclose your personally identifiable information, as required, to comply
						with the law, applicable regulations, governmental and quasi-governmental requests, judicial
						proceedings, court orders or subpoenas, to enforce our Legal Notices or other agreements, or to
						protect our rights, property or safety or the rights, property or safety of our users or others
						(e.g., to a consumer reporting agency for fraud protection etc.).</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Business Transitions</div>
					<p>In the event our company goes through a business transition, such as a merger, acquisition by
						another company, or sale of all or a portion of its assets, your personally identifiable
						information will likely be among the assets transferred. You will be notified via e-mail and/or
						a prominent notice on our Web site for 30 days of any such change in ownership or control of
						your personal information.</p></div>
				<div class="page-info__body-block">
					<div class="page-info__title">Changes to this Privacy Statement</div>
					<p>We reserve the right to modify this privacy statement at any time. We will not jeopardize your
						privacy. The provisions contained in this privacy statement supersede all previous notices or
						policies regarding our privacy practices with respect to this site. Any and all changes will be
						made here, to this privacy statement.</p>
					<p>We encourage you to check our site frequently to see the current privacy statement to be informed
						of how we are committed to protecting your information and providing you with improved content
						on our website in order to enhance your online experience. Upon any material changes to the
						policy statement, we will post those changes to this privacy statement, the homepage, and other
						places we deem appropriate so that you are aware of what information we collect, how we use it,
						and under what circumstances, if any, we disclose it.</p></div>
				<div class="page-info__body-block">
                    <?php
                    $posts = get_posts( array(
                        'numberposts' => 1,
                        'post_type'   => 'contact',
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        // формат вывода the_title() ...
                        ?>

	                    <div class="page-info__title">Contact Us</div>
	                    <span>If you have any questions, comments, complaints or suggestions regarding our privacy policy or our website, please contact us at:</span>
	                    <span>Buisness Debt Adjusters, LLC</span>
	                    <span>Phone: <a class="info-contact__info" href="tel:<?= the_field('phone_number') ?>"><?= the_field('phone_number') ?></a></span>
	                    <span>Email: Intakes@businessdebtadjusters.com</span>

                        <?php
                    }

                    wp_reset_postdata();
                    ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>