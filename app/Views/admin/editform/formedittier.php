<?= $this->extend('admin/template/addlayout'); ?>

<?= $this->section('add'); ?>

<!-- Main Panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Form Add Tier</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/admin-page">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/tier">Tier</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/edit/edittierform/<?= $tier['id']; ?>">Form Edit Tier</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Edit Tier Data</h4>
                            </div>
                        </div>
                        <form id="exampleValidation" action="/edit/edittier/<?= $tier['id']; ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="level" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tier Level <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="level" name="level" placeholder="Masukkan Tier Level" value="<?= $tier['level']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="pool" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pool <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Pool" aria-label="pool" aria-describedby="pool-addon" id="pool" name="pool" value="<?= $tier['pool']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="jumlah" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jumlah Koin <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input class="form-control" id="jumlah" placeholder="Masukkan jumlah koin" aria-label="jumlah" aria-describedby="jumlah-addon" name="jumlah" value="<?= $tier['jumlah']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/tier" class="btn btn-danger" style="border-radius: 100px;">
                                            Batal
                                        </a>
                                        <input class="btn btn-primary ml-4" type="submit" value="Submit" style="border-radius: 100px;">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                Skyx © 2021 Copyright. All right reserved
            </div>
        </div>
    </footer>
</div>

<?= $this->endSection(); ?>