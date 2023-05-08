<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Trash Grup &mdash; YukNikah</title>
<?= $this->endSection()?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Trash Group</h1>
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
                <h4>Data Sampah Grup Kontak</h4>
                <div class="card-header-action">
                    <a href="<?=site_url('groups/restore')?>" class="btn btn-info">Restore All</a>
                    <form action="<?= site_url('groups/delete-permanent')?>" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus data ini?')">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm">Del All Permanent</button>
                    </form>
                </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Grup</th>
                                    <th>Info</th>
                                    <th>Action</th>
                                </tr>
                                <?php foreach($groups as $key => $value) : ?> 
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $value->name_group ?></td>
                                        <td><?= $value->info_group ?></div></td>
                                        <td class="text-center" style="width:15%">
                                            <a href="<?= site_url('groups/restore/'.$value->id_group) ?>" class="btn btn-info btn-sm">Restore</a>
                                            <form action="<?= site_url('groups/delete-permanent/'.$value->id_group)?>" method="post" class="d-inline" onsubmit="return confirm('Yakin menghapus data ini?')">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm">Delete</button>
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