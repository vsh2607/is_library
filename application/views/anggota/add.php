<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">

                    <h6 class="m-0  my font-weight-bold text-primary"><span><a href="<?=base_url()?>anggota"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                                </svg></a>
                        </span>Tambah Data Anggota</h6>


                </div>
                <div class="card-body">
                    <form action="<?= base_url() ?>anggota/add" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="agt_no_id"><strong>No Identitas</strong></label>
                            <input type="number" class="form-control" id="agt_no_id" name="agt_no_id" value="<?= set_value('agt_no_id') ?>">
                            <?= form_error('agt_no_id', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="agt_nama"><strong>Nama</strong></label>
                            <input type="text" class="form-control" id="agt_nama" name="agt_nama" value="<?= set_value('agt_nama') ?>">
                            <?= form_error('agt_nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="agt_no_telp"><strong>No Telp</strong></label>
                            <input type="text" class="form-control" id="agt_no_telp" name="agt_no_telp" value="<?= set_value('agt_no_telp') ?>">
                        </div>

                        <div class="form-group">
                            <label for="agt_dob"><strong>Tanggal Lahir</strong></label>
                            <input type="date" class="form-control" id="agt_dob" name="agt_dob" value="<?= set_value('agt_dob') ?>">
                            <?= form_error('agt_dob', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="agt_alamat"><strong>Alamat</strong></label>
                            <input type="text" class="form-control " id="agt_alamat" name="agt_alamat" placeholder="Alamat" value="<?= set_value('agt_alamat') ?>">
                            <?= form_error('agt_alamat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <div class="form-group">
                            <label for="agt_img_url"><strong>Upload Gambar</strong></label>
                            <p></p>
                            <input type="file" id="agt_img_url" name="agt_img_url">
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