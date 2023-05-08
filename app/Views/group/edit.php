<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Groups &mdash; YukNikah</title>
<?= $this->endSection()?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Grup Kontak</h1>
    </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Grup</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?=site_url('groups/update/'.$group->id_group)?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="name_group">Nama Grup*</label>
                            <input type="text" name="name_group" value="<?=$group->name_group?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="info_group">Info Grup</label>
                            <textarea name="info_group" class="form-control"><?=$group->info_group?></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Update</button>
                            <button type="submit" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>