<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

    <div class="page-header mt-0">
        <h1 class="page-title">Servis Terbaru</h1>
        <div>
            <a href="#">Lihat Servis Lainnya</a>
        </div>
    </div>

    <div class="row">
        <?php foreach($services as $key => $service): ?>
        <div class="col-xl-4 col-md-12">
            <div class="card overflow-hidden">
                <img src="/uploads/<?= $service['image']  ?>" class="card-img-top" alt="img">
                <div class="card-body">
                    <h5 class="card-title"><?= $service['title'] ?></h5>
                    <p class="card-text">Rp <?= number_format($service['estimated_price']) ?></p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?= $this->endSection() ?>
