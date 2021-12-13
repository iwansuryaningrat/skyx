<?= $this->extend('admin/template/layout'); ?>

<?= $this->section('admin'); ?>

<!-- Main Panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data User</h4>
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
                        <a href="/admin/users">Data dari <?= $user['first_name'] . ' ' . $user['last_name']; ?></a>
                    </li>
                </ul>
            </div>

            <!-- Detail User -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail user dari <?= $user['first_name'] . ' ' . $user['last_name']; ?></h4>
                        </div>
                        <form action="/edit/updateuser/<?= $user['id']; ?>" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <p class="form-control-static"><?= $user['first_name'] . ' ' . $user['last_name']; ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <p class="form-control-static"><?= $user['username']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <p class="form-control-static"><?= $user['email']; ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Telepon</label>
                                            <p class="form-control-static"><?= $user['phone']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label">Tujuan</label>
                                            <p class="form-control-static"><?= $user['tujuan']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Project</label>
                                            <p class="form-control-static"><?= $user['project']; ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Pitchdeck</label>
                                            <p class="form-control-static"><?= $user['pitchdeck']; ?></p>
                                            <a href="/admin/download/<?= $user['pitchdeck']; ?>" class="btn btn-info">Download</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label">Chain</label>
                                            <p class="form-control-static"><?= $user['chain']; ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Whitepaper</label>
                                            <p class="form-control-static"><?= $user['whitepaper']; ?></p>
                                            <a href="/admin/download/<?= $user['whitepaper']; ?>" class="btn btn-info">Download</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-check">
                                            <label>Apakah Anda Ingin Membalas Pesan Ini?</label><br />
                                            <label class="form-radio-label">
                                                <input class="form-radio-input" type="radio" name="reply" id="reply" value="yes" checked="">
                                                <span class="form-radio-sign">Yes</span>
                                            </label>
                                            <label class="form-radio-label ml-3">
                                                <input class="form-radio-input" type="radio" name="reply" id="reply" value="no">
                                                <span class="form-radio-sign">No</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <input class="btn btn-primary ml-4" type="submit" value="Ok" style="border-radius: 100px;">
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