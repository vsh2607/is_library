<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">


                    <h6 class="m-0  my font-weight-bold text-primary"><span><a href="<?=base_url()?>buku"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                                </svg></a></span> Tambah Data Buku Paket</h6>


                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>buku/add" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="bkp_no_induk"><strong>No ID Buku</strong></label>
                            <input type="number" class="form-control" id="bkp_no_induk" name="bkp_no_induk" value="<?= set_value('bkp_no_induk') ?>">
                            <?= form_error('bkp_no_induk', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="bkp_kategori_buku"><strong>Kategori Buku</strong></label>
                            <select id="bkp_kategori_buku" class="form-control" name="bkp_kategori_buku">
                                <option selected disabled>Pilih Kategori...</option>
                                <option value="Fks">Fiksi</option>
                                <option value="PA">Pendidikan Agama</option>
                                <option value="PPKN">PPKN</option>
                                <option value="Bind">Bahasa Indonesia</option>
                                <option value="Bing">Bahasa Inggris</option>
                                <option value="Mtk">Matematika</option>
                                <option value="EkA">Ekonomi Akuntansi</option>
                            </select>
                            <?= form_error('bkp_kategori_buku', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="bkp_judul_buku"><strong>Judul Buku</strong></label>
                            <input type="text" class="form-control " id="bkp_judul_buku" name="bkp_judul_buku" value="<?= set_value('bkp_judul_buku') ?>">
                            <?= form_error('bkp_judul_buku', '<small class="text-danger pl-3">', '</small>') ?>

                        </div>

                        <div class="form-group">
                            <label for="bkp_pengarang"><strong>Pengarang</strong></label>
                            <input type="text" class="form-control " id="bkp_pengarang" name="bkp_pengarang" value="<?= set_value('bkp_pengarang') ?>">
                            <?= form_error('bkp_pengarang', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="bkp_penerbit"><strong>Penerbit</strong></label>
                            <input type="text" class="form-control " id="bkp_penerbit" name="bkp_penerbit" value="<?= set_value('bkp_penerbit') ?>">
                            <?= form_error('bkp_penerbit', '<small class="text-danger pl-3">', '</small>') ?>

                        </div>

                        <div class="form-group">
                            <label for="bkp_tahun_terbit"><strong>Tahun Terbit</strong></label>
                            <input type="number" class="form-control " id="bkp_tahun_terbit" name="bkp_tahun_terbit" value="<?= set_value('bkp_tahun_terbit') ?>">
                            <?= form_error('bkp_tahun_terbit', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="bkp_sumber_asal"><strong>Sumber Asal</strong></label>
                            <select id="bkp_sumber_asal" class="form-control" name="bkp_sumber_asal" value="<?= set_value('bkp_sumber_asal') ?>">
                                <option selected disabled>Pilih Sumber Asal...</option>
                                <option value="beli">Beli</option>
                                <option value="bantuan">Bantuan</option>
                            </select>
                            <?= form_error('bkp_sumber_asal', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="bkp_kelas"><strong>Kelas Buku</strong></label>
                            <select id="bkp_kelas" class="form-control" name="bkp_kelas" value="<?= set_value('bkp_kelas') ?>">
                                <option selected disabled>Pilih Kelas Buku...</option>
                                <option value="None">None</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                            <?= form_error('bkp_sumber_asal', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="bkp_jumlah_buku"><strong>Jumlah Buku</strong></label>
                            <input type="number" class="form-control " id="bkp_jumlah_buku" name="bkp_jumlah_buku" value="<?= set_value('bkp_jumlah_buku') ?>">
                            <?= form_error('bkp_jumlah_buku', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>


                        <div class="card-footer">
                            <button class="btn btn-primary mt-3 float-right" type="submit" name="add">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->