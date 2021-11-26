<div class="container pt-5">
    <h3><?= $title ?></h3>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="<?php echo site_url('C_siswa/add'); ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value=" <?= set_value('nama'); ?>">
                                <small class="text-danger">
                                    <?php echo form_error('nama') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= set_value('alamat'); ?></textarea>
                                <small class="text-danger">
                                    <?php echo form_error('alamat') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email"><?= set_value('email'); ?>
                                <small class="text-danger">
                                    <?php echo form_error('email') ?>
                                </small>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label" type="password">password</label>
                            <div class="col-sm-10">
                                <input type="password" id="password" name="password"><?= set_value('password'); ?>
                                <small class="text-danger">
                                    <?php echo form_error('password') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr"><?= set_value('tgl_lhr'); ?>
                                <small class="text-danger">
                                    <?php echo form_error('tgl_lhr') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option value="Teknik Informatika" selected disabled>Pilih</option>
                                    <option value="Teknik Informatika" <?php if (set_value('jurusan') == "Teknik Informatika") : echo "selected";
                                                                        endif; ?>>Teknik Informatika</option>
                                    <option value="Sistem Informasi" <?php if (set_value('jurusan') == "Sistem Informasi") : echo "selected";
                                                                        endif; ?>>Sistem Informasi</option>
                                    <option value="Teknik Komputer" <?php if (set_value('jurusan') == "Teknik Komputer") : echo "selected";
                                                                    endif; ?>>Teknik Komputer</option>
                                    <option value="Manajemen Informatika" <?php if (set_value('jurusan') == "Manajemen Informatika") : echo "selected";
                                                                            endif; ?>>Manajemen Informatika</option>
                                    <option value="Komputerisasi Akuntansi" <?php if (set_value('jurusan') == "Komputerisasi Akuntansi") : echo "selected";
                                                                            endif; ?>>Komputerisasi Akuntansi</option>
                                    <option value="Teknik Elektro" <?php if (set_value('jurusan') == "Teknik Elektro") : echo "selected";
                                                                    endif; ?>>Teknik Elektro</option>
                                </select>
                                <small class="text-danger">
                                    <?php echo form_error('jurusan') ?>
                                </small>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="gender" name="gender" value="Laki-laki" <?php if (set_value('gender') == "Laki-laki") : echo "checked";
                                                                                                                                    endif; ?>>
                                        <label class="form-check-label" for="gender">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="gender2" name="gender" value="Perempuan" <?php if (set_value('gender') == "Perempuan") : echo "checked";
                                                                                                                                    endif; ?>>
                                        <label class="form-check-label" for="gender2">
                                            Perempuan
                                        </label>
                                    </div>
                                    <small class="text-danger">
                                        <?php echo form_error('gender') ?>
                                    </small>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="ststus" name="ststus" value="KIP" <?php if (set_value('ststus') == "KIP") : echo "checked";
                                                                                                                                endif; ?>>
                                        <label class="form-check-label" for="ststus">
                                            KIP
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="ststus2" name="ststus" value="Beasiswa" <?php if (set_value('ststus') == "Beasiswa") : echo "checked";
                                                                                                                                    endif; ?>>
                                        <label class="form-check-label" for="ststus2">
                                            Beasiswa
                                        </label>
                                    </div>
                                    <small class="text-danger">
                                        <?php echo form_error('ststus') ?>
                                    </small>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" name="foto" size="20">
                                <small class="text-danger">
                                    <?php echo form_error('foto') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('alamat')
</script>