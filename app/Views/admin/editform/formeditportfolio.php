<?= $this->extend('admin/template/addlayout'); ?>

<?= $this->section('edit'); ?>

<!-- Main Panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Form Edit Portfolio</h4>
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
                        <a href="/admin/portfolio">Portfolio</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/edit/editportfolioform/<?= $dataportfolio['id'] ?>">Form Edit Portfolio</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Edit Portfolio Data</h4>
                            </div>
                        </div>
                        <form id="exampleValidation" action="/edit/editportfolio/<?= $dataportfolio['id'] ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama </span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="<?= $dataportfolio['nama']; ?>" placeholder="Masukkan Nama Portfolio">
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="link" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">link </span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Link Portfolio" aria-label="link" aria-describedby="link-addon" id="link" name="link" value="<?= $dataportfolio['link']; ?>">
                                    </div>
                                </div>
                                <div class="separator-solid"></div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image </label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="input-file input-file-image">
                                            <img class="img-upload-preview img-circle" width="100" height="100" src="/foto/portfolio/<?= $dataportfolio['logo']; ?>" alt="preview">
                                            <input type="file" class="form-control form-control-file" id="foto" name="foto" accept="image/*" value="<?= $dataportfolio['logo']; ?>">
                                            <label for="foto" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/portfolio" class="btn btn-danger" style="border-radius: 100px;">
                                            Batal
                                        </a>
                                        <input class="btn btn-primary ml-4" type="submit" value="Edit" style="border-radius: 100px;">
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