<?= $this->extend('auth/template') ?>
<?= $this->section('content') ?>
    <form class="login100-form validate-form">
        <span class="login100-form-title">
            Registration
        </span>
        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                <i class="mdi mdi-account" aria-hidden="true"></i>
            </a>
            <input class="input100 border-start-0 ms-0 form-control" type="text" placeholder="Nama">
        </div>
        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                <i class="zmdi zmdi-email" aria-hidden="true"></i>
            </a>
            <input class="input100 border-start-0 ms-0 form-control" type="email" placeholder="Email">
        </div>
        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                <i class="zmdi zmdi-eye" aria-hidden="true"></i>
            </a>
            <input class="input100 border-start-0 ms-0 form-control" type="password" placeholder="Password">
        </div>
<!--        <label class="custom-control custom-checkbox mt-4">-->
<!--            <input type="checkbox" class="custom-control-input">-->
<!--            <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>-->
<!--        </label>-->
        <div class="container-login100-form-btn">
            <a href="index.html" class="login100-form-btn btn-primary">
                Register
            </a>
        </div>
        <div class="text-center pt-3">
            <p class="text-dark mb-0">Already have account?<a href="/login" class="text-primary ms-1">Login</a></p>
        </div>
    </form>
<?= $this->endSection() ?>