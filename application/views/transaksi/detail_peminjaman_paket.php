<!-- Begin Page Content -->
<div class="container-fluid">

    <style>
        button.disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-5">
                    <h6 class="m-0  my font-weight-bold text-primary"><span><a href="<?= base_url() ?>peminjaman/show_p"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                                </svg></a>
                        </span>Daftar Detail Peminjaman Buku Paket</h6>
                    <br>
                </div>
                <div class="col-3"></div>
                <div class="col-4">


                </div>
            </div>
        </div>



        <div class="card-body">



            <p><strong>Kode Transaksi &nbsp;:&nbsp; <?= $transaksi_detail_paket_row->tr_kode ?></strong></p>
            <p><strong>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?= $transaksi_detail_paket_row->agt_nama ?></strong></p>
            <p><strong>No.ID Anggota &nbsp;&nbsp;:&nbsp;&nbsp;<?= $transaksi_detail_paket_row->agt_kode ?><strong></p>
            <br>
            <p>List Buku Pinjaman &nbsp;&nbsp;:</p>
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100px" cellspacing="0">
                    <thead>
                        <tr>

                            <th class="align-middle text-center">Judul Buku</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($transaksi_detail_paket as $tdp) : ?>
                            <form action="<?= base_url() ?>peminjaman/returnBukuP" method="POST">

                                <tr>

                                    <th><?= $tdp['bkp_judul_buku'] ?></th>
                                    <input type="hidden" name="bkp_no_induk[]" value="<?= $tdp['bkp_no_induk'] ?>">
                                    <input type="hidden" name="dt_kode[]" value="<?= $tdp['dt_kode'] ?>">
                                    <input type="hidden" name="tr_kode[]" value="<?= $tdp['tr_kode'] ?>">
                                    <input type="hidden" name="agt_kode[]" value="<?=$tdp['agt_kode']?>">
                                </tr>
                    </tbody>

                <?php endforeach; ?>


                </table>
            </div>
        </div>

        <div class="card-footer">
            <?php if ($tdp['tr_jumlah_transaksi'] <= 0) { ?>
                <button class="btn btn-secondary btn-sm float-end disabled">Kembalikan Semua Buku</button>
            <?php } else { ?>

                <button class="btn btn-danger btn-sm float-end">Kembalikan Semua Buku</button>

            <?php } ?>

        </div>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->