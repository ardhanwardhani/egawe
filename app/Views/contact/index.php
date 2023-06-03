<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Kontak &mdash; YukNikah</title>
<?= $this->endSection()?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Kontak</h1>
        <div class="section-header-button">
            <a href="<?= site_url('contacts/new') ?>" class="btn btn-primary">Add New Contact</a>
        </div>
    </div>

    <?php if(session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissable show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissable show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error!</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Data Kontak</h4>
                <!-- <div class="card-header-action">
                    <a href="<?=site_url('contacts/trash')?>" class="btn btn-danger"><i class="fas fa-trash"> Trash</i></a>
                </div> -->
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alias</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Info</th>
                                    <th>Grup</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($contacts as $key => $value) : ?> 
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value->name_contact ?></td>
                                        <td><?= $value->alias_contact ?></td>
                                        <td><?= $value->telepon_contact ?></td>
                                        <td><?= $value->email_contact ?></td>
                                        <td><?= $value->alamat_contact ?></td>
                                        <td><?= $value->info_contact ?></div></td>
                                        <td><?= $value->name_group ?></div></td>
                                        <td class="text-center" style="width:15%">
                                            <a href="<?= site_url('contacts/'.$value->id_contact.'/edit') ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="<?= site_url('contacts/'.$value->id_contact)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus data ini?')">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                    </ul>
                </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>