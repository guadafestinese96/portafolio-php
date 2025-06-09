<?php require 'header.php'; ?>
<div class="container">

    <div class="container">
        <h2 class="title">Hard Skills</h2>

        <div class="category">
            <h3 class="titleSkill">Programming Languages</h3>
            <div class="skills-grid">
                <?php foreach ($skills_lang as $skill): ?>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <img src="<?php echo RUTA; ?>/images/skills/<?php echo $skill['image']; ?>" alt="<?php echo $skill['name']; ?>" />
                        </div>
                        <h4 class="skill-name"><?php echo $skill['name']; ?></h4>
                        <p class="skill-level"><?php echo $skill['experience']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="category">
            <h3 class="titleSkill">Design & Layout</h3>
            <div class="skills-grid">
                <?php foreach ($skills_design as $skill): ?>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <img src="<?php echo RUTA; ?>/images/skills/<?php echo $skill['image']; ?>" alt="<?php echo $skill['name']; ?>" />
                        </div>
                        <h4 class="skill-name"><?php echo $skill['name']; ?></h4>
                        <p class="skill-level"><?php echo $skill['experience']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="category">
            <h3 class="titleSkill">Frameworks & Libraries</h3>
            <div class="skills-grid">
                <?php foreach ($skills_fram_lib as $skill): ?>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <img src="<?php echo RUTA; ?>/images/skills/<?php echo $skill['image']; ?>" alt="<?php echo $skill['name']; ?>" />
                        </div>
                        <h4 class="skill-name"><?php echo $skill['name']; ?></h4>
                        <p class="skill-level"><?php echo $skill['experience']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="category">
            <h3 class="titleSkill">Tools & Technologies</h3>
            <div class="skills-grid">
                <?php foreach ($skills_tools as $skill): ?>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <img src="<?php echo RUTA; ?>/images/skills/<?php echo $skill['image']; ?>" alt="<?php echo $skill['name']; ?>" />
                        </div>
                        <h4 class="skill-name"><?php echo $skill['name']; ?></h4>
                        <p class="skill-level"><?php echo $skill['experience']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
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

<?php require 'footer.php'; ?>