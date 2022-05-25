<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
        <?php foreach ($abouts as $about) : ?>
            <div class="col">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <h3><?= $about->getTitle() ?></h3>
                        <p><?= $about->getGenre() ?></p>
                        <p><?= $about->getLanguage() ?></p>
                        <small><?= $about->getDescription() ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>