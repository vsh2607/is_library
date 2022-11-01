<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">

                    <h6 class="m-0  my font-weight-bold text-primary"><span> <a href="<?=base_url()?>buku/index2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                                </svg></a>
                        </span>Tambah Data Buku Non Paket</h6>


                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>buku/addN" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="bnp_no_inventaris"><strong>No Inventaris Buku</strong></label>
                            <input type="number" class="form-control" id="bnp_no_inventaris" name="bnp_no_inventaris">

                        </div>

                        <div class="form-group">
                            <label for="bnp_judul_buku"><strong>Judul Buku</strong></label>
                            <input type="text" class="form-control " id="bnp_judul_buku" name="bnp_judul_buku">
                        </div>

                        <div class="form-group">
                            <label for="bnp_pengarang"><strong>Pengarang</strong></label>
                            <input type="text" class="form-control " id="bnp_pengarang" name="bnp_pengarang">
                        </div>

                        <div class="form-group">
                            <label for="bnp_klasifikasi"><strong>Klasifikasi</strong></label>
                            <input type="text" class="form-control " id="bnp_klasifikasi" name="bnp_klasifikasi">
                        </div>


                        <div class="form-group">
                            <label for="bnp_sumber_asal"><strong>Sumber Asal</strong></label>
                            <select id="bnp_sumber_asal" class="form-control" name="bnp_sumber_asal">
                                <option selected disabled>Pilih Sumber Asal...</option>
                                <option value="beli">Beli</option>
                                <option value="hadiah">Hadiah</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bnp_bahasa"><strong>Bahasa</strong></label>
                            <select id="bnp_bahasa" class="form-control" name="bnp_bahasa">
                                <option selected disabled>Pilih Bahasa...</option>
                                <option value="asing">Asing</option>
                                <option value="indonesia">Indonesia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bnp_macam"><strong>Macam</strong></label>
                            <select id="bnp_macam" class="form-control" name="bnp_macam">
                                <option selected disabled>Pilih Bahasa...</option>
                                <option value="teks">Teks</option>
                                <option value="fakta">Fakta</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Info">Info</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bnp_harga"><strong>Harga</strong></label>
                            <input type="number" class="form-control " id="bnp_harga" name="bnp_harga">
                        </div>

                        <div class="form-group">
                            <label for="bnp_keterangan"><strong>Keterangan</strong></label>
                            <input type="text" class="form-control " id="bnp_keterangan" name="bnp_keterangan">
                        </div>


                        <div class="form-group">
                            <label for="bnp_jumlah_buku"><strong>Jumlah Buku</strong></label>
                            <input type="number" class="form-control " id="bnp_jumlah_buku" name="bnp_jumlah_buku">
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