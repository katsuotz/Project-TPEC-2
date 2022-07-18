<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

    <div class="page-header mt-0">
        <h1 class="page-title">List Servis</h1>
    </div>

    <div class="row">
        <?php foreach($services as $key => $service): ?>
        <div class="col-xl-4 col-md-12">
            <div class="card overflow-hidden relative">
                <img src="/uploads/<?= $service['image']  ?>" class="card-img-top" alt="img">
                <span class="badge card-category bg-success"><?= $service['category_name'] ?></span>
                <div class="card-body">
                    <h5 class="card-text"><?= $service['title'] ?></h5>
                    <p class="card-title">Rp <?= number_format($service['estimated_price']) ?></p>
                    <a href="/" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?= $this->endSection() ?>
