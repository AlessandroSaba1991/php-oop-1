<?php
require_once __DIR__ . '/bd.php';
include __DIR__ . '/layout/head.php';
?>
    <main>
        <?php 
        include __DIR__ . '/partials/jumbo_movie.php';
        include __DIR__ . '/partials/movies.php';
        ?>

    </main>    
<?php include __DIR__ . '/layout/footer.php';