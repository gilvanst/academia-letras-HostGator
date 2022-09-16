<!DOCTYPE HTML>
<?php
include '../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> notícias</p>
		</div>
	</div>
</header>
<html>

<body class="homepage is-preload">
	<div id="page-wrapper">
		<?php include_once path('template/template-site/navbar.php'); ?>

		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="content">

							<!-- Content -->

							<article class="box page-content">

								<header>
									<h2>Quem somos?</h2>
									<p>Semper amet scelerisque metus faucibus morbi congue mattis</p>
									<ul class="meta">
										<li class="icon fa-clock">5 days ago</li>
										<li class="icon fa-comments"><a href="#">1,024</a></li>
									</ul>
								</header>

								<section>
									<span class="image featured"><img src="images/pic05.jpg" alt="" /></span>
									<p>
										Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
										Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
										Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
										consequat etiam lorem ipsum dolor sit amet nullam.
									</p>
								</section>

								<section>
									<h3>More intriguing information</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus
										justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis,
										ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet
										vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor.
										Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis
										rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien
										vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor.
										Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis
										rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien.
										Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi.
										Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum commodo luctus.
									</p>
								</section>

								<section>
									<h3>So in conclusion ...</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus
										justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis,
										ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet
										vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor.
										Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis
										rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien.
										Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi.
										Phasellus sed nisl vitae.
									</p>
									<p>
										Suspendisse laoreet metus ut metus imperdiet interdum aliquam justo tincidunt. Mauris dolor urna,
										fringilla vel malesuada ac, dignissim eu mi. Praesent mollis massa ac nulla pretium pretium.
										Maecenas tortor mauris, consectetur pellentesque dapibus eget, tincidunt vitae arcu.
									</p>
								</section>

							</article>

						</div>
					</div>
					<div class="col-12">

						<!-- Features -->
						<section class="box features">
							<h2 class="major"><span>A Major Heading</span></h2>
							<div>
								<div class="row">
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
											<h3><a href="#">A Subheading</a></h3>
											<p>
												Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
												lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
											</p>
										</section>

									</div>
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
											<h3><a href="#">Another Subheading</a></h3>
											<p>
												Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
												lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
											</p>
										</section>

									</div>
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
											<h3><a href="#">And Another</a></h3>
											<p>
												Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
												lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
											</p>
										</section>

									</div>
									<div class="col-3 col-6-medium col-12-small">

										<!-- Feature -->
										<section class="box feature">
											<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
											<h3><a href="#">And One More</a></h3>
											<p>
												Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
												lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
											</p>
										</section>

									</div>
									<div class="col-12">
										<ul class="actions">
											<li><a href="#" class="button large">Do Something</a></li>
											<li><a href="#" class="button alt large">Think About It</a></li>
										</ul>
									</div>
								</div>
							</div>
						</section>

					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<div class="row gtr-200">
				<?php include_once path('template/template-site/contato.php'); ?>
					<div class="col-12">

						<!-- About -->
						<section>
							<h2 class="major"><span>Desenvolvedores</span></h2>
							<p>
								Gilvan Santos <br>
								Bruno Corrêa <br>
								Caique Pollachini <br>
								Kenjhon Leandro <br>
							</p>
						</section>

					</div>
					
				</div>

				

			</div>
		</footer>

	</div>
	<?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>