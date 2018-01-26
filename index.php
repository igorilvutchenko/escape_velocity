<?php
$menu = [
	[
		'url' => '/',
		'title' => 'Home'
	],
		[
		'url' => '/dropdown',
		'title' => 'Dropdown',
		'submenu' => [
			[
				'url' => '/lorem-ipsum',
				'title' => 'lorem ipsum'
			],
			[
				'url' => '/magna-veroeros',
				'title' => 'Magna veroeros'
			],
			[
				'url' => '/etiam-nisl',
				'title' => 'Etiam nisl'
			],
			[
				'url' => '/sed-consequat',
				'title' => 'Sed consequat',
				'submenu' =>[
					[
						'url' => '/lorem-dolor',
						'title' => 'Lorem dolor'
					],
					[
						'url' => '/amet-consequat',
						'title' => 'Amet consequat'
					],
					[
						'url' => '/magna-phasellus',
						'title' => 'Magna phasellus'
					],
					[
						'url' => '/etiam-nisl',
						'title' => 'Etiam nisl'
					],
					[
						'url' => '/sed-feugiat',
						'title' => 'Sed feugiat'
					]
				]
			],
			[
				'url' => '/nisl-tempus',
				'title' => 'Nisl tempus'
			]
		]
	],
		[
		'url' => '/left-sidebar',
		'title' => 'Left Sidebar'
	],
	[
		'url' => '/right-sidebar',
		'title' => 'Right Sidebar'
	],
	[
		'url' => '/no-sidebar',
		'title' => 'No Sidebar'
	],
		
];
?>

<?php
$features = [
	['title' => 'Mattis velit diam vulputate',
	'icon' => 'fa-comment',
	'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],
	['title' => 'Lorem ipsum dolor sit veroeros',
	'icon' => 'fa-refresh',
	'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],
	['title' => 'Pretium phasellus justo lorem',
	'icon' => 'fa-picture-o',
	'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],
	['title' => 'Tempus sed pretium orci',
	'icon' => 'fa-cog',
	'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],
	['title' => 'Aliquam consequat et feugiat',
	'icon' => 'fa-wrench',
	'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	],
	['title' => 'Dolore laoreet aliquam mattis',
	'icon' => 'fa-check',
	'description' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.'
	]
];
?>

<?php
$contacts = [
	['type' => 'address',
	 'title' => 'Mailing Address',
	 'icon' => 'fa-home',
	 'content' => 'Untitled Corporation
	 					1234 Somewhere Rd #987
	 					Nashville, TN 00000-0000'
	],
	['type' => 'social',
	 'title' => 'Social',
	 'icon' => 'fa-comment',
	 'content' => '@untitled-corp
	 					linkedin.com/untitled
	 					facebook.com/untitled'
	],
	['type' => 'email',
	 'title' => 'Email',
	 'icon' => 'fa-envelope',
	 'content' => 'info@untitled.tld'
	],
	['type' => 'phone',
	 'title' => 'Phone',
	 'icon' => 'fa-phone',
	 'content' => '(000) 555-0000'
	]
]
?>

<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Escape Velocity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Escape Velocity</a></h1>
								<p>A free responsive site template by HTML5 UP</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<?php foreach($menu as $item) { ?>
										<li>
											<a href="<?php echo $item['url'] ?>"><?=$item['title'] ?></a>
											<?php if(isset($item['submenu']) and !empty($item[submenu])) { ?>
											<ul>
												<?php foreach($item['submenu'] as $subitem) { ?>
													<li>
														<a href="<?php echo $subitem['url'] ?>"><?=$subitem['title'] ?></a>
															<?php if(isset($subitem['submenu']) and !empty($subitem[submenu])) { ?>
																<ul>
																	<?php foreach($subitem['submenu'] as $subsubitem) { ?>
																		<li>
																			<a href="<?php echo $subsubitem['url'] ?>"><?=$subsubitem['title'] ?></a>
																		</li>
																	<?php } ?>
																</ul>
															<?php } ?>
													</li>								
												<?php } ?>
											</ul>
											<?php } ?>
										</li>
									<?php } ?>


								</ul>
							</nav>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">The Introduction</div>
					<section id="intro" class="container">
						<p class="style1">So in case you were wondering what this is all about ...</p>
						<p class="style2">
							Escape Velocity is a free responsive<br class="mobile-hide" />
							site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
						</p>
						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>
						<ul class="actions">
							<li><a href="#" class="button style3 big">Proceed</a></li>
						</ul>
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">The Details</div>
					<div id="main" class="container">
						<!-- Image -->
							<a href="#" class="image featured">
								<img src="/images/pic01.jpg" alt="" />
							</a>

					<!-- Features -->
						<section id="features">
							<header class="style1">
								<h2>Dolor consequat feugiat amet veroeros</h2>
								<p>Feugiat dolor nullam orci pretium phasellus justo</p>
							</header>
							<div class="feature-list">
								<div class="row">
									<?php $count = 1;
										foreach ($features as $feature) {
									 ?>
										<div class="6u 12u(mobile)">
											<section>
                                       	    <h3 class="icon <?php echo $feature['icon']  ?>"><?php echo $feature['title'] ?></h3>
                                       	    <p><?php echo $feature['description'] ?></p>
                                     		</section>
                                  		</div>
                                  	<?php if($count % 2== 0 AND $i == count($features)) { ?>
                                </div>
                                <div class="row">
                                   <?php }  ?>
                                   <?php $count++;
                                } ?>                                    
                       	    </div>
                       	</div>
						</section>
					</div>


				</div>
		</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">The Rest Of It</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>Ipsum sapien elementum portitor?</h2>
							<p>
								Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
								Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
								<?php include 'contact-form.php'; ?>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
                                        <div class="row">
                                            <?php $i = 0; ?>
                                            <?php foreach($contacts as $contact): ?>
                                                <?php
                                                    switch ($contact['type']) {
                                                        case 'address':
                                                            // $content = explode("\n", $contact['content']);
                                                            $contact['content'] = str_replace("\n", '<br />', $contact['content']);
                                                            break;
                                                        case 'social':
                                                            $content = '';
                                                            $links = explode("\n", $contact['content']);

                                                            foreach($links as $link) {
                                                                $content = $content . '<a href="' . $link . '">' . $link . '</a>';
                                                            }
                                                            $contact['content'] = $content;
                                                            break;
                                                        case 'email':
                                                            $content = '';
                                                            $links = explode("\n", $contact['content']);

                                                            foreach($links as $link) {
                                                                $content = $content . '<a href="mailto:' . $link . '">' . $link . '</a>';
                                                            }
                                                            $contact['content'] = $content;
                                                            break;  
                                                        case 'phone':
                                                            $content = '';
                                                            $links = explode("\n", $contact['content']);

                                                            foreach($links as $link) {
                                                                $content = $content . '<a href="tel:' . $link . '">' . $link . '</a>';
                                                            }
                                                            $contact['content'] = $content;
                                                            break;                                                       	
                                                        default:
                                                            # code...
                                                            break;
                                                    }
                                                ?>
                                                <div class="6u 12u(mobile)">
                                                    <section>
                                                        <h3 class="icon <?=$contact['icon'] ?>"><?=$contact['title'] ?></h3>
                                                        <p><?=$contact['content'] ?></p>
                                                    </section>
                                                </div>
                                                <?php if((++$i) % 2 == 0 AND $i != count($contacts)): ?>
                                                    </div>
                                                    <div class="row">
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </section>

							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>