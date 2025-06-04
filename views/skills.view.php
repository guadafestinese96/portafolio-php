<?php require 'header.php'; ?>

<div class="container">
    <h2 class="title">hard skills</h1>

    <div class="container skillsContainer">
        <h2 class="title titleSkills">Design & Layout</h2>
        <div class="allSkills">
            <?php foreach ($images_design as $img): ?>
                <div class="container">
                    <div class="containerSkillImg">
                        <img src="<?php echo $img; ?>" alt="imagen" class="skillImg" />
                    </div>
                    <p class="skillName">
                        <?php echo ucfirst(pathinfo($img, PATHINFO_FILENAME)); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container skillsContainer">
        <h2 class="title titleSkills">Frameworks & Libraries</h2>
        <div class="allSkills">
            <?php foreach ($images_frameworks as $img): ?>
                <div class="container">
                    <div class="containerSkillImg">
                        <img src="<?php echo $img; ?>" alt="imagen" class="skillImg" />
                    </div>
                    <p class="skillName">
                        <?php echo ucfirst(pathinfo($img, PATHINFO_FILENAME)); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container skillsContainer">
        <h2 class="title titleSkills">Programming Languajes</h2>
        <div class="allSkills">
            <?php foreach ($images_programming as $img): ?>
                <div class="container">
                    <div class="containerSkillImg">
                        <img src="<?php echo $img; ?>" alt="imagen" class="skillImg" />
                    </div>
                    <p class="skillName">
                        <?php echo ucfirst(pathinfo($img, PATHINFO_FILENAME)); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container skillsContainer">
        <h2 class="title titleSkills">Tools & Technologies</h2>
        <div class="allSkills">
            <?php foreach ($images_tools as $img): ?>
                <div class="container">
                    <div class="containerSkillImg">
                        <img src="<?php echo $img; ?>" alt="imagen" class="skillImg" />
                    </div>
                    <p class="skillName">
                        <?php echo ucfirst(pathinfo($img, PATHINFO_FILENAME)); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <h2 class="title">Soft Skills</h2>
    <div class="container softSkillsContainer">
    <ul class="soft-skills">
       
        <li><i class="fa-solid fa-user-gear"></i> Autonomía y aprendizaje constante</li> 
        <li><i class="fa-solid fa-check-circle"></i> Responsabilidad y compromiso</li>
        <li><i class="fa-solid fa-comments"></i> Buena comunicación</li>
        <li><i class="fa-solid fa-people-group"></i> Trabajo en equipo</li>
        <li><i class="fa-solid fa-calendar-check"></i> Organización</li>
    </ul>
</div>
</div>

</div>

<?php require 'footer.php'; ?>