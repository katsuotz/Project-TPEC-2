<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="page-header mt-0">
    <h1 class="page-title">List Servis</h1>
</div>

<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-2">Kategori</p>
                <div class="list-group">
                    <?php foreach ($categories as $category): ?>
                        <a href="/services/<?= $category['category_slug'] ?>?search=<?= @$search ?>"
                           class="list-group-item list-group-item-action flex-column align-items-start border-0 py-1">
                            <?= $category['category_name'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9">
        <div class="row">
            <?php foreach ($services as $key => $service): ?>
                <div class="col-xl-4 col-md-12">
                    <div class="card overflow-hidden relative">
                        <img src="/uploads/<?= $service['image'] ?>" class="card-img-top" alt="img">
                        <span class="badge card-category bg-success"><?= $service['category_name'] ?></span>
                        <div class="card-body">
                            <h5 class="card-text"><?= $service['title'] ?></h5>
                            <p class="card-title">Rp <?= number_format($service['estimated_price']) ?></p>
                            <a href="/services/<?= $service['category_slug'] ?>/<?= $service['slug'] ?>" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
