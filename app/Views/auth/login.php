<?= $this->extend('layout/auth_template') ?>

<?= $this->section('content') ?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login page</h1>
                                    </div>
                                    <?= session()->getFlashdata('success'); ?>
                                    <?= session()->getFlashdata('failed'); ?>
                                    <form action="<?= base_url('auth'); ?>" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= old('email'); ?>">
                                            <div class="invalid-feedback ml-3">
                                                <?= $validation->getError('email'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" id="exampleInputPassword" placeholder="Password">
                                            <div class="invalid-feedback ml-3">
                                                <?= $validation->getError('password'); ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/register');  ?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?= $this->endSection(); ?>