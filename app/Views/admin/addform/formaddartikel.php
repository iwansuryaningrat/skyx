<?= $this->extend('admin/template/addlayout'); ?>

<?= $this->section('add'); ?>

<!-- Main Panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Form Add Team</h4>
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
                        <a href="/admin/teams">Teams</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/add/formaddteam">Form Add Team</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Team Data</h4>
                            </div>
                        </div>
                        <form id="exampleValidation" action="/add/addartikel" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="judul" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Judul <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="judul" judul="judul" placeholder="Masukkan Judul Artikel" name="judul" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="preview" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Preview <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <textarea class="form-control" id="preview" rows="5" placeholder="Tambahkan Preview" aria-label="preview" aria-describedby="preview-addon" name="preview" required></textarea>
                                    </div>
                                </div>
                                <!-- <div class="separator-solid"></div>
                                        <div class="form-group form-show-validation row">
                                            <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span class="required-label">*</span></label>
                                            <div class="col-lg-4 col-md-9 col-sm-8">
                                                <div class="input-file input-file-image">
                                                    <img class="img-upload-preview img-circle" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                                                    <input type="file" class="form-control form-control-file" id="foto" name="foto" accept="image/*" required>
                                                    <label for="foto" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
                                                </div>
                                            </div>
                                        </div> -->
                                <div class="form-group form-show-validation row">
                                    <label for="isi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Isi Artikel <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <textarea class="form-control" id="isi" placeholder="Masukkan Isi Artikel" aria-label="isi" aria-describedby="isi-addon" name="isi" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/artikel" class="btn btn-danger" style="border-radius: 100px;">
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