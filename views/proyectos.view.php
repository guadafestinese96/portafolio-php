<?php require 'header.php'; ?>
<div class="container">
    <h1 class="title">Proyectos</h1>
    <div class="allStudies">
        <?php foreach ($projects as $project): ?>
            <div class="containerEstudios projects">
                <img src="<?php echo RUTA . '/images/' . $project['image']; ?>" alt="imagen" class="estudiosImg" />
                <p class="titleStudy"><?php echo $project['name']; ?></p>
                <p class="descriptionStudy"><?php echo $project['description']; ?></p>
                <div class="links">
                <div class="containerLinkStudy">
                    <a href="<?php echo $project['link_page']; ?>" class="rightArrow" target="_blank">Página Vercel<i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="containerLinkStudy">
                    <a href="<?php echo $project['link_github']; ?>" class="rightArrow" target="_blank">Código Github<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require 'footer.php'; ?>