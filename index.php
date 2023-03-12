<!DOCTYPE HTML>
<html>
	<head>
		<title>Leiturinhas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#" class="icon solid fa-home"><span>Home</span></a>
						<a href="#work" class="icon solid fa-folder-plus"><span>Add Book</span></a>
						<a href="#contact" class="icon solid fa-bookmark"><span>Library</span></a>
						<a href="https://twitter.com/ttdaanyee" class="icon brands fa-twitter"><span>Twitter</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel intro">
								<header>
									<h1>Leiturinhas!</h1>
									<p>Your read friend.</p>
								</header>
								<a href="#work" class="jumplink pic" style='background: #B38BF5'>
									<span class="arrow icon solid fa-chevron-right"><span>Start organize your read!</span></span>
								</a>
							</article>

						<!-- Work -->
							<article id="work" class="panel">
								<header>
									<h2>Add books to your library!</h2>
								</header>
								<p>
									Phasellus enim sapien, blandit ullamcorper elementum eu, condimentum eu elit.
									Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
									luctus elit eget interdum.
								</p>
								<section>
									<form method="POST" action="banco/save.php" enctype="multipart/form-data">
										Title  <input type="text" name="book"></br>
										Autor <input type="text" name="autor"></br>
										Sinopse <textarea name="note" rows="6"></textarea>
										Cover <input type="file" name="foto"></br></br>
										<input type="submit" value="Gravar" name="gravar">
									</form>
								</section>
							</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>My library!</h2>
								</header>
								<div class="row">
										<div class="col-4 col-6-medium col-12-small">
											<a href="#" class="image fit"><img src="images/pic01.jpg" alt=""></a>
										</div>
									</div>
							</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>&copy; A&A Tech</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>