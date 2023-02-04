
<?php
include '../../../config.php';
?>
<!DOCTYPE html>
<html lang="en">

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
                            <?php
                            $sql = "SELECT * FROM historia";

                            $historias = retornaDados($sql);

                            foreach ($historias as $historia) { ?>

                                <section>
                                    <h3>Quem somos?</h3>
                                    <p>
                                        <?=$historia['texto']?>
                                    </p>
                                </section>


                            </article>

                        </div>
                        <?php } ?>
                    </div>

                </div>

            </div>
        </section>
        <footer id="footer">
            <div class="container">
                <div class="row gtr-200">
                    <?php include_once path('template/template-site/contato.php'); ?>
                
                </div>
        </footer>

    </div>

    <?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>