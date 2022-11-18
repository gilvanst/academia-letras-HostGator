<!DOCTYPE HTML>
<?php
include '../../../config.php';
?>

<?php include_once path('template/template-site/head.php'); ?>
<header id="header">
    <div class="logo container">
        <div>
            <h1><a href="<?= arquivo('index.php') ?>" id="logo"></a></h1>
            <p> publicações</p>
        </div>
    </div>
</header>
<html>

<body class="is-preload">
    <div id="page-wrapper">

        <?php include_once path('template/template-site/navbar.php'); ?>
        <!-- Main -->

        <section id="main">
            <div class="container">


                <div class="row">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wAJgfGkZ3Kg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                </div>
            </div>
        </section>

        <!-- Footer -->
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