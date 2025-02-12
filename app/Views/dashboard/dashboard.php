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

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?= $this->endSection(); ?>