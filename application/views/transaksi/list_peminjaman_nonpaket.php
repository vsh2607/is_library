<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-5">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Peminjaman Non Paket</h6>
                    <br>
                </div>
                <div class="col-3"></div>
                <div class="col-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Cari Pinjaman...">
                    </div>

                </div>
            </div>
        </div>



        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="align-middle text-center">No.</th>
                            <th class="align-middle text-center">Kode Pinjaman</th>
                            <th class="align-middle text-center">Nama Peminjam</th>
                            <th class="align-middle text-center">Tanggal Peminjaman</th>
                            <th class="align-middle text-center">Jumlah Buku Pinjaman</th>
                            <th class="align-middle text-center">Status Pinjaman</th>
                            <th class="align-middle text-center">Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($data_join_transaksi as $djt) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td class="align-middle text-center tr_kode"><?= $djt['tr_kode'] ?></td>
                                <td class="align-middle text-center"><?= $djt['agt_nama'] ?></td>
                                <td class="align-middle text-center"><?= $djt['tr_tgl_pinjam'] ?></td>
                                <td class="align-middle text-center"><?= $djt['tr_jumlah_transaksi'] ?></td>
                                <td class="align-middle text-center">
                                    <?php if ($djt['tr_jumlah_transaksi'] > 0) { ?>
                                        <small class="text-danger"><strong>MASIH MEMINJAM</strong></small>

                                    <?php } else { ?>
                                        <small class="text-success"><strong>SUDAH KEMBALI</strong></small>

                                    <?php } ?>

                                </td>
                                <td>
                                    <a href="<?= base_url() ?>peminjaman/showDetail_np/<?= $djt['tr_kode'] ?>" class="btn btn-info btn-sm detail_btn">Detail Pinjaman</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->