<!-- Begin Page Content -->
<div class="container-fluid">

    <style>
        a.disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-5">
                    <h6 class="m-0  my font-weight-bold text-primary"><span><a href="<?= base_url() ?>peminjaman/show_np"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                                </svg></a>
                        </span>Daftar Detail Peminjaman Buku Non Paket</h6>
                    <br>
                </div>
                <div class="col-3"></div>
                <div class="col-4">


                </div>
            </div>
        </div>



        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="align-middle text-center"><small>No.</small></th>
                            <th class="align-middle text-center"><small>Kode Pinjaman</small></th>
                            <th class="align-middle text-center"><small>Nama Peminjam</small></th>
                            <th class="align-middle text-center"><small>Judul Buku</small></th>
                            <th class="align-middle text-center"><small>Tanggal Harus Kembali</small></th>
                            <th class="align-middle text-center"><small>Denda</small></th>
                            <th class="align-middle text-center"><small>Status Buku</small></th>
                            <th class="align-middle text-center"><small>Aksi</small></th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($transaksi_detail_nonpaket as $tdnp) : ?>
                            <tr>
                                <th class="align-middle text-center"><small><?= $no++ ?></small></th>
                                <th class="align-middle text-center"><small><?= $tdnp['tr_kode'] ?></small></th>
                                <th class="align-middle text-center"><small><?= $tdnp['agt_nama'] ?></small></th>
                                <th class="align-middle text-center"><small><?= $tdnp['bnp_judul_buku'] ?></small></th>
                                <th class="align-middle text-center"><small><?= $tdnp['dt_tgl_kembali'] ?></small></th>
                                <th class="align-middle text-center"><small>Rp.<?= $tdnp['dt_denda'] ?></small></th>
                                <?php if ($tdnp['dt_is_returned'] == '0') { ?>
                                    <th class="align-middle text-center"><small class="text-danger"><strong>Belum Kembali</strong></small></th>
                                    <th class="align-middle text-center">
                                        <a href="<?=base_url()?>peminjaman/returnBukuNP/<?=$tdnp['bnp_id']?>/<?=$tdnp['tr_kode']?>/<?=$tdnp['dt_kode']?>" class="btn btn-sm btn-warning">Kembalikan</a>
                                    </th>

                                <?php } else { ?>
                                    <th class="align-middle text-center"><small class="text-success"><strong>Sudah Kembali</strong></small></th>
                                    <th class="align-middle text-center">
                                        <a href="#" class="btn btn-sm btn-secondary disabled">Kembalikan</a>
                                    </th>
                                <?php } ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->