<?= $this->extend('layout/dashboard_template'); ?>


<?= $this->section('content'); ?>
<?= $this->include('layout/sidebar'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">


    <!-- Main Content -->
    <div id="content">

        <?= $this->include('layout/topbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Halo, <?= session('name') ?></h1>

            <!-- Profile card -->
            <div class="card content-user-page">
                <div class="card-body">
                    <h5 class="card-title pb-3">My Profile</h5>
                    <div class="card-content mt-5">
                        <div class="input-photo-profile">
                            <i class="fas fa-user-circle fa-10x icon-user"></i>
                        </div>
                        <div class="input-with-label my-4">
                            <div class="input-with-label_label d-inline-block text-right"><label for="Email" class="">Email</label></div>
                            <div class="account-input-text d-inline-block ml-5"><?= session('email'); ?></div>
                        </div>
                        <div class="input-with-label my-4">
                            <div class="input-with-label_label d-inline-block text-right"><label for="nama" class="text-right">Name</label></div>
                            <div class="account-input-text d-inline-block text-right ml-5"><?= session('name'); ?></div>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Edit
                        </button>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>