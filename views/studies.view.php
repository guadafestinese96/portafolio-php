<?php require 'header.php'; ?>
<div class="container">
    <h1 class="title">Estudios</h1>
    <div class="allStudies">
        <?php foreach ($studies as $course): ?>

            <div class="containerEstudios">
                <img src="<?php echo RUTA . '/images/' . $course['image']; ?>" alt="imagen" class="estudiosImg" />
                <p class="titleStudy"><?php echo $course['title']; ?></p>
                <p class="yearStudy">Año: <?php echo $course['year'] . ' - ' . $course['hours']; ?> </p>
                <p class="descriptionStudy"><?php echo $course['description']; ?></p>
                <div class="containerLinkStudy">
                    <a href="<?php echo $course['link']; ?>" class="rightArrow" target="_blank">contenido del curso<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<?php require 'footer.php'; ?>