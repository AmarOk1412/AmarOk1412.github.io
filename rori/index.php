<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>RORI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<div id="gif_rori"><img src="images/rori2.gif" alt="gif rori"/></div>
							<h1>R.O.R.I.</h1>
							<p>Just a modulable chatterbot created by <a href="https://enconn.fr">AmarOk</a><br />
							and released for free under the WTFPL on <a href="https://github.com/AmarOk1412/rori">Github</a>.</p>
							<ul class="actions">
								<li><a href="https://github.com/AmarOk1412/rori/wiki" class="button scrolly">How it works</a></li>
								<?php
								if (file_exists('configure_part.json')) {
									echo '<li><a href="configure.php" class="button scrolly">Configure</a></li>';
								}
								?>
								<li><a href="#downloads" class="button scrolly">Download</a></li>
							</ul>
						</div>
						<div id="btn_down"><a href="#discover" class="button scrolly">⋁</a></div>
					</section>

						<!-- Discover -->
						<section id="discover" class="wrapper style1 fullscreen fade-up">
							<div id="btn_up"><a href="#intro" class="button scrolly">⋀</a></div>
							<div class="inner">
								<video width="70%" controls>
								  <source src="/videos/rori.webm" type="video/webm">
								  Your browser does not support the video tag.
								</video>
							</div>
							<div id="btn_down"><a href="#downloads" class="button scrolly">⋁</a></div>
						</section>

						<section id="downloads" class="wrapper style2 spotlights">
						<?php
						$download_path = "downloads.json";
						$download_file = fopen($download_path, "r") or die("Unable to open file!");
						$json_download = fread($download_file, filesize($download_path));
						$downloads = json_decode($json_download);
						fclose($download_file);
						foreach ($downloads as $download) {
							echo '<section>
								<div class="image"><img src="'.$download->{'img'}.'" alt="'.$download->{'name'}.' image" data-position="center center"/></div>
								<div class="content">
									<div class="inner">
										<h2>'.$download->{'name'}.'</h2>
										<p>'.$download->{'description'}.'</p>
										<ul class="actions">
											<li><a href="'.$download->{'url'}.'" class="button scrolly">Download</a></li>
										</ul>
									</div>
								</div>
							</section>';
						}
						?>
						</section>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
