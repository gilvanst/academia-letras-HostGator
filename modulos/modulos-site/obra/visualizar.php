        <!DOCTYPE HTML>

        <html>
        <?php
        include '../../../config.php';
        ?>
            <link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">
       
        <?php include_once path('template/template-site/head.php'); ?>
        <?php
        $sql = "SELECT * FROM obra ORDER BY idObra ASC";
        $obras = retornaDados($sql);

        foreach ($obras as $obra) { ?>

            <header id="header">
                <div class="logo container">
                    <div>
                        <h1><?= $obra['tituloObra'] ?></h1>
                        <p></p>
                    </div>
                </div>
            </header>


            <body class="is-preload">
                <div id="page-wrapper">

                    <?php include_once path('template/template-site/navbar.php'); ?>
                    <!-- Main -->
                    <section id="main">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <section class="box features">
                                        <div>
                                            <div class="row">

                                                <div class="container-fluid ">

                                                    <div class="media">
                                                        <img class="align-self-start mr-2 rounded " width="200px" height="288px" src="<?= arquivo('img/' . $obra['imagemObra']) ?>" alt="capa do livro" />

                                                        <div class="media-body">
                                                            <p class="mb-4">Ano de publicação: <?= $obra['anoObra'] ?></p>
                                                            <p class="mb-4">Gênero:<?= $obra['generoObra'] ?></p>
                                                            <p class="mb-4">Páginas: <?= $obra['paginasObra'] ?></p>
                                                            <p class="mb-4">Arquivo para leitura: <a href="<?= arquivo('pdf/' . $obra['pdfObra']) ?>" download> <?= $obra['pdfObra'] ?></a></p>
                                                            <p class="mb-4">Link para compra: <a href="<?= $obra['linkObra'] ?>"><?= $obra['linkObra'] ?></a></p>
                                                            <p class="mb-4">isbn: <?= $obra['isbnObra'] ?></p>


                                                        </div>

                                                    </div>
                                                    <div class="text-justify mt-5">
                                                        <p><?= $obra['sinopseObra'] ?></p>
                                                        <i>Autores:</i>
                                                        <i><?= $obra['autoresObra'] ?></i>
                                                    </div>
                                                </div>

                                            <?php } ?>

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