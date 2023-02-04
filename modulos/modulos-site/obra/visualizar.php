
        <?php
        include '../../../config.php';
        
        
        if (!empty($_GET['idObra'])) {
            $id = $_GET['idObra'];
            
            
        }
            $sql = 'SELECT * FROM obra  where idObra= ' . $id .'';
            $obra = retornaDado($sql);
        
        
        foreach (retornaDado($sql) as $row) {
            $id = $obra['idObra'];
            $titulo = $obra['tituloObra'];
            $autores = $obra['autoresObra'];
            $sinopse = $obra['sinopseObra'];
            $imagem = $obra['imagemObra'];
            $isbn = $obra['isbnObra'];
            $ano = $obra['anoObra'];
            $paginas = $obra['paginasObra'];
            $pdf = $obra['pdfObra'];
            $link = $obra['linkObra'];
            $genero = $obra['generoObra']; 
        } 
        ?>
                <!DOCTYPE HTML>

        <html>
        <link href="<?= arquivo("css/sb-admin-2.min.css") ?>" rel="stylesheet">

        <?php include_once path('template/template-site/head.php'); ?>
        

            <header id="header">
                <div class="logo container">
                    <div>
                    <h1> <a href="<?= arquivo("modulos/modulos-site/obra/colecao.php") ?>" class="button2">  <?= $obra['tituloObra'] ?></a></h1>
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
                                                            <p class="mb-4">Link para compra: <a href="<?= $obra['linkObra'] ?>"><?= substr($obra['linkObra'], 0, 50 ) ?>...</a></p>
                                                            <p class="mb-4">isbn: <?= $obra['isbnObra'] ?></p>

                                                            
                                                        </div>

                                                    </div>
                                                    <div class="text-justify mt-5">
                                                        <p><?= $obra['sinopseObra'] ?></p>
                                                        <i>Autores:</i>
                                                        <i><?= $obra['autoresObra'] ?></i>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="text-right">
                                 <a class="button " href="<?= arquivo('modulos/modulos-site/obra/colecao.php') ?>">Voltar</a>
    
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