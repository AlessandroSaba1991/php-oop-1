<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
        <?php foreach ($movies as $movie) : ?>
            <div class="col">
                <div class="card text-center h-100">
                    <img class="img-fluid" src="<?= $movie->getImage() ?>" alt="<?= $movie->getTitle() ?>">
                    <div class="card-body">
                        <h3><?= $movie->getTitle() ?></h3>
                        <p><?= $movie->getGenre() ?></p>
                        <p><?= $movie->getLanguage() ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>