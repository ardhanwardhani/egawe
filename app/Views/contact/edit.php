<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Contact &mdash; YukNikah</title>
<?= $this->endSection()?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('contacts') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Contact</h1>
    </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Ubah Kontak</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?=site_url('contacts/'.$contact->id_contact)?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="groups">Group *</label>
                            <select name="id_group" class="form-control" required>
                                <option value="" hidden></option>
                                <?php foreach($groups as $key => $value) : ?>
                                    <option value="<?= $value->id_group ?>" <?=$contact->id_group == $value->id_group ? 'selected' : null ?>>
                                    <?= $value->name_group ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name_contact">Nama*</label>
                            <input type="text" name="name_contact" class="form-control" value="<?=$contact->name_contact?>" required>
                        </div>
                        <div class="form-group">
                            <label for="name_alias">Alias</label>
                            <input type="text" name="alias_contact" class="form-control" value="<?=$contact->alias_contact?>">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon*</label>
                            <input type="number" name="telepon_contact" class="form-control" value="<?=$contact->telepon_contact?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email_contact" class="form-control" value="<?=$contact->email_contact?>">
                        </div>
                        <div class="form-group">
                            <label for="info_group">Alamat*</label>
                            <textarea name="alamat_contact" class="form-control"><?=$contact->alamat_contact?>"</textarea>
                        </div>
                        <div class="form-group">
                            <label for="info_group">Info</label>
                            <textarea name="info_group" class="form-control"><?=$contact->info_contact?></textarea>
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