<?php require 'header.php';?>
<div class="skillsContainer">
    <h1>skills</h1>
    <?php foreach($images as $img): ?>
        <div class="containerSkillImg">
            <img src="<?php echo $img;?>" alt="imagen" class="skillImg"/>
        </div>        
    <?php endforeach;?>
</div>
<?php require 'footer.php';?>