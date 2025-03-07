<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <nav>
        <ul>
            <li><a href="index.php" <?php echo $current_page == 'index.php' ? 'class="active"' : ''; ?>>Bienvenue Sur Mon Portfolio !</a></li>
            <li><a href="cv.php" <?php echo $current_page == 'cv.php' ? 'class="active"' : ''; ?>>MON CV</a></li>
            <li><a href="veille.php" <?php echo $current_page == 'veille.php' ? 'class="active"' : ''; ?>>VEILLE TECNOLOGIQUE</a></li>
            <li><a href="projet.php" <?php echo $current_page == 'projet.php' ? 'class="active"' : ''; ?>>PROJETS</a></li>
            <li><a href="stages.php" <?php echo $current_page == 'stages.php' ? 'class="active"' : ''; ?>>STAGES</a></li>
            <li><a href="competences.php" <?php echo $current_page == 'competences.php' ? 'class="active"' : ''; ?>>FICHE DE MES COMPÉTENCES</a></li>
        </ul>
    </nav>
</header>
