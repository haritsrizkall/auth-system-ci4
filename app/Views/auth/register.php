<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Technocorner 2021</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets')  ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets')  ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('content'); ?>

<body class="bg-gradient-primary">

    <div class="container">


        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="<?= base_url('auth/register'); ?>" method="POST" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" id="name" name="name" placeholder="Full Name" value="<?= old('name'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('name'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email Address" value="<?= old('email'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user <?= ($validation->hasError('password1')) ? 'is-invalid' : '' ?>" id="password1" name="password1" placeholder="Password" value="<?= old('password1'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password1'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user <?= ($validation->hasError('password2')) ? 'is-invalid' : '' ?>" id="password2" name="password2" placeholder="Repeat Password" value="<?= old('password2'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('password2'); ?>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth');  ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets')  ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets')  ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets')  ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets')  ?>/js/sb-admin-2.min.js"></script>

</body>

</html>

<?= $this->endSection(); ?>