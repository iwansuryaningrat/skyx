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
                        <form id="exampleValidation" action="/add/addteam" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Team" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="jabatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jabatan <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" placeholder="Jabatan" aria-label="jabatan" aria-describedby="jabatan-addon" id="jabatan" name="jabatan" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="deskripsi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Deskripsi </span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <textarea class="form-control" id="deskripsi" rows="5" placeholder="Tambahkan Deskripsi" aria-label="deskripsi" aria-describedby="deskripsi-addon" name="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="instagram" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Instagram <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Link Instagram" aria-label="instagram" aria-describedby="instagram-addon" id="instagram" name="instagram" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="linkedin" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Linkedin <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Link Linkedin" aria-label="linkedin" aria-describedby="linkedin-addon" id="linkedin" name="linkedin" required>
                                    </div>
                                </div>
                                <div class="separator-solid"></div>
                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span class="required-label">*</span></label>
                                    <div class="col-lg-4 col-md-9 col-sm-8">
                                        <div class="input-file input-file-image">
                                            <img class="img-upload-preview img-circle" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                                            <input type="file" class="form-control form-control-file" id="foto" name="foto" accept="image/*" required>
                                            <label for="foto" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/teams" class="btn btn-danger" style="border-radius: 100px;">
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