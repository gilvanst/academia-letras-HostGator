<!DOCTYPE html>
<html lang="en">
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
	<div class="logo container">
		<div>
			<h1><a href="<?= arquivo('index.php')?>" id="logo"></a></h1>
			<p> linha do tempo</p>
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

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <footer id="footer">
            <div class="container">
                <div class="row gtr-200">
                    <?php include_once path('template/template-site/contato.php'); ?>
                    
                </div>

                
            </div>
        </footer>

    </div>

    <?php include_once path('template/template-site/importacoes-js.php'); ?>

</body>

</html>