<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Gawe &mdash; YukNikah</title>
<?= $this->endSection()?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('gawe') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Gawe</h1>
    </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Buat Gawe / Acara</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?=site_url('gawe')?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="name_gawe">Nama Gawe / Acara *</label>
                            <input type="text" name="name_gawe" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                        <label for="date_gawe">Tanggal Gawe / Acara *</label>
                        <input type="date" name="date_gawe" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="info_gawe">Info</label>
                            <textarea name="info_gawe" class="form-control"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                            <button type="submit" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>