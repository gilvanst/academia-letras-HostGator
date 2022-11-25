<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Cadastros</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
        <a class="collapse-item" href="<?= arquivo('modulos/academicos/academicos.php') ?>">Acadêmicos</a>
        <a class="collapse-item" href="<?= arquivo('modulos/memorial/memorial.php') ?>">Memorial</a>
           
            <a class="collapse-item" href="<?= arquivo('modulos/eventos/eventos.php')?>">Eventos</a>
            <a class="collapse-item" href="<?= arquivo('modulos/historia/historia.php')?>">Nossa história</a>
            <a class="collapse-item" href="<?= arquivo('modulos/obras/obras.php')?>">Obra</a>
            <a class="collapse-item" href="<?= arquivo('modulos/publicacao/publicacao.php') ?>">Publicações</a>
            <a class="collapse-item" href="<?= arquivo('modulos/revista/revista.php') ?>">Revista Plural</a>
            <a class="collapse-item" href="<?= arquivo('modulos/videos/videos.php') ?>">Videos</a>
            <?php if(podeMostrar(['administrador'])){ ?>
            <a class="collapse-item" href="<?= arquivo('modulos/usuarios/usuarios.php')?>">Usuários</a>
            <?php } ?>
        </div>
    </div>
</li>


