<?php require 'header.php';?>
<div class="skillsContainer">
    <h1 class="title">skills</h1>
    <div class="skillsImagesContainer">
    <?php foreach($images as $img): ?>
        <div class="containerSkillImg">
            <img src="<?php echo $img;?>" alt="imagen" class="skillImg"/>
        </div>        
    <?php endforeach;?>
</div>
</div>
<?php require 'footer.php';?>