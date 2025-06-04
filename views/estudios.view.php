<?php require 'header.php';?>
<div class="container">
    <h1 class="title">Estudios</h1>
    <div class="estudiosImagesContainer">
    <?php foreach($images as $img): ?>
        <div class="containerEstudiosImg">
            <img src="<?php echo $img;?>" alt="imagen" class="estudiosImg"/>
        </div>        
    <?php endforeach;?>
</div>
</div>
<?php require 'footer.php';?>