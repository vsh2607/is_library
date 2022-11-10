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
                        <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Cari Buku...">
                    </div>
                
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah yakin ingin menghapus data berikut?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="<?= base_url() ?>buku/deleten/<?= $db['bnp_id'] ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Update Modal-->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if ($db['bnp_id'] !== null) { ?>
                        <form action="<?= base_url() ?>buku/editn/<?= $db['bnp_id'] ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="bnp_no_inventaris"><strong>No Inventaris Buku</strong></label>
                                <input type="number" class="form-control" id="bnp_no_inventaris" name="bnp_no_inventaris" value="<?= $db['bnp_no_inventaris'] ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="bnp_judul_buku"><strong>Judul Buku</strong></label>
                                <input type="text" class="form-control " id="bnp_judul_buku" name="bnp_judul_buku" value="<?= $db['bnp_judul_buku'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="bnp_pengarang"><strong>Pengarang</strong></label>
                                <input type="text" class="form-control " id="bnp_pengarang" name="bnp_pengarang" value="<?= $db['bnp_pengarang'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="bnp_klasifikasi"><strong>Klasifikasi</strong></label>
                                <input type="text" class="form-control " id="bnp_klasifikasi" name="bnp_klasifikasi" value="<?= $db['bnp_klasifikasi'] ?>" required>
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
                                <input type="number" class="form-control " id="bnp_harga" name="bnp_harga" value="<?= $db['bnp_harga'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="bnp_keterangan"><strong>Keterangan</strong></label>
                                <input type="text" class="form-control " id="bnp_keterangan" name="bnp_keterangan" value="<?= $db['bnp_keterangan'] ?>">
                            </div>


                            <div class="form-group">
                                <label for="bnp_jumlah_buku"><strong>Jumlah Buku</strong></label>
                                <input type="number" class="form-control " id="bnp_jumlah_buku" name="bnp_jumlah_buku" value="<?= $db['bnp_jumlah_buku'] ?>">
                            </div>
                </div>
                <div class="modal-footer">
                <?php } ?>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-warning" type="submit">Edit</button>
                </form>


                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->