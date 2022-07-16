<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

    <div class="page-header mt-0">
        <h1 class="page-title">Servis Terbaru</h1>
        <div>
            <a href="#">Lihat Servis Lainnya</a>
        </div>
    </div>

    <div class="row">
        <?php for ($i = 0; $i < 9; $i++): ?>
        <div class="col-xl-4 col-md-12">
            <div class="card overflow-hidden">
                <img src="../assets/images/media/8.jpg" class="card-img-top" alt="img">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php endfor ?>
    </div>
<?= $this->endSection() ?>