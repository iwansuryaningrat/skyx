<?= $this->extend('admin/template/addlayout'); ?>

<?= $this->section('add'); ?>

<!-- Main Panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Form Add FAQ</h4>
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
                        <a href="/admin/faqs">FAQS</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/add/addfaqsform">Form Add FAQ</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add FAQ Data</h4>
                            </div>
                        </div>
                        <form id="exampleValidation" action="/add/addfaq" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="pertanyaan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pertanyaan <span class="required-label">*</span></label>
                                    <div class="col-lg-6 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukkan pertanyaan" required>
                                    </div>
                                </div>
                                <div class="form-group form-show-validation row">
                                    <label for="jawaban" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jawaban <span class="required-label">*</span></label>
                                    <div class="col-lg-6 col-md-9 col-sm-8">
                                        <textarea type="text" class="form-control" placeholder="Masukkan jawaban" aria-label="jawaban" aria-describedby="jawaban-addon" id="jawaban" name="jawaban" required></textarea>
                                        <small id="emailHelp2" class="form-text text-muted">Tambahkan <b>class="txt__desc"</b> pada setiap tag melalui code view.</small>
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