<!DOCTYPE html>
<html lang="en">
<?php
include '../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> nossa história</p>
		</div>
	</div>
</header>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <?php include_once path('template/template-site/navbar.php'); ?>

        <section id="main">
            <div class="container">
                <div class="row gtr-200">
                    <div class="col-12">
                        <div class="content">
                            <article class="box page-content">

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

                </div>

            </div>
        </section>
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
        </footer>

    </div>

    <?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>