<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-5">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Buku Non Paket<span></span></h6>
                    <br>
                    <!-- <a class="btn btn-primary btn-sm" href="<?= base_url() ?>buku/index2"><small>Buku Non Paket</small></a> | -->
                    <a class="btn btn-primary btn-sm" href="<?= base_url() ?>buku"><small>Buku Paket</small></a>

                </div>
                <div class="col-3"></div>
                <div class="col-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Cari Buku...">
                    </div>
                    <br>
                    <a class="btn btn-sm btn-primary float-right" href="<?= base_url() ?>buku/addN"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg><strong class="mx-2">Tambah Buku</strong></a>
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
                            <th class="align-middle text-center">No. Inventaris</th>
                            <th class="align-middle text-center">Judul Buku</th>
                            <th class="align-middle text-center">Pengarang</th>
                            <th class="align-middle text-center">Klasifikasi</th>
                            <th class="align-middle text-center">Asal Buku</th>
                            <th class="align-middle text-center">Bahasa</th>
                            <th class="align-middle text-center">Macam</th>
                            <!-- <th class="align-middle text-center">Harga</th> -->
                            <!-- <th class="align-middle text-center">Keterangan</th> -->
                            <th class="align-middle text-center">Jumlah</th>
                            <th class="align-middle text-center">Aksi</th>

                        </tr>
                    </thead>
<!--                     
Nama
Kelas
Tanggal Pinjam
Tanggal Kembali

List buku pinjam
x1 -> Tanggal kembali
x2 -> Tanggal kembali
x3 -> Tanggal kembali
x4 -> Tanggal kembali -->






                    <tbody>
                        <?php $no = 1;
                        foreach ($data_buku as $db) : ?>
                            <tr>
                                <td class="align-middle text-center"><?= $no++ ?></td>
                                <td class="align-middle text-center bnp_no_inventaris"><?= $db['bnp_no_inventaris'] ?></td>
                                <td class="align-middle text-center bnp_judul_buku"><?= $db['bnp_judul_buku'] ?></td>
                                <td class="align-middle text-center bnp_pengarang"><?= $db['bnp_pengarang'] ?></td>
                                <td class="align-middle text-center bnp_klasifikasi"><?= $db['bnp_klasifikasi'] ?></td>
                                <td class="align-middle text-center bnp_sumber_asal"><?= $db['bnp_sumber_asal'] ?></td>
                                <td class="align-middle text-center bnp_bahasa"><?= $db['bnp_bahasa'] ?></td>
                                <td class="align-middle text-center bnp_macam"><?= $db['bnp_macam'] ?></td>
                                <td class="align-middle text-center bnp_jumlah_buku"><?= $db['bnp_jumlah_buku'] ?></td>
                                <td class="bnp_id" style="display:none;"><?=$db['bnp_id']?></td>
                                <td class="align-middle text-center">
                                    <!--Edit-->
                                    <a href="#" data-toggle="modal" data-target="#updateModal" class="btn btn-sm btn-warning btn_update"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg></a>
                                    
                                    <!--Hapus-->
                                    <a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger btn_delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

            $(document).on('click', '.btn_delete', function(){
                var bnp_id = $(this).closest('tr').find('.bnp_id').text();
                let link = document.getElementById('btn_hapus');
                link.href = "<?=base_url()?>buku/deleteN/" + bnp_id.trim();
            });


            $(document).on('click', '.btn_update', function(){
                var bnp_id = $(this).closest('tr').find('.bnp_id').text();
                var bnp_no_inventaris = $(this).closest('tr').find('.bnp_no_inventaris').text();
                var bnp_judul_buku = $(this).closest('tr').find('.bnp_judul_buku').text();
                var bnp_pengarang = $(this).closest('tr').find('.bnp_pengarang').text();
                var bnp_klasifikasi = $(this).closest('tr').find('.bnp_klasifikasi').text();
                var bnp_sumber_asal = $(this).closest('tr').find('.bnp_sumber_asal').text();
                var bnp_bahasa = $(this).closest('tr').find('.bnp_bahasa').text();
                var bnp_macam = $(this).closest('tr').find('.bnp_macam').text();
                var bnp_jumlah_buku = $(this).closest('tr').find('.bnp_jumlah_buku').text();

                document.getElementById('bnp_no_inventaris').value = bnp_no_inventaris;
                document.getElementById('bnp_judul_buku').value = bnp_judul_buku;
                document.getElementById('bnp_pengarang').value = bnp_pengarang;
                document.getElementById('bnp_klasifikasi').value = bnp_klasifikasi;
                document.getElementById('bnp_sumber_asal').value = bnp_sumber_asal;
                document.getElementById('bnp_bahasa').value = bnp_bahasa;
                document.getElementById('bnp_macam').value = bnp_macam;
                document.getElementById('bnp_jumlah_buku').value = bnp_jumlah_buku;
                document.getElementById('form-update').action = "<?=base_url()?>buku/editN/"+bnp_id.trim();

               
            })
        });
    </script>

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
                    <a class="btn btn-danger" id="btn_hapus" href="">Delete</a>
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
                        <form action="" id="form-update" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="bnp_no_inventaris"><strong>No Inventaris Buku</strong></label>
                                <input type="number" class="form-control" id="bnp_no_inventaris" name="bnp_no_inventaris" value="" required>

                            </div>

                            <div class="form-group">
                                <label for="bnp_judul_buku"><strong>Judul Buku</strong></label>
                                <input type="text" class="form-control " id="bnp_judul_buku" name="bnp_judul_buku" value="" required>
                            </div>

                            <div class="form-group">
                                <label for="bnp_pengarang"><strong>Pengarang</strong></label>
                                <input type="text" class="form-control " id="bnp_pengarang" name="bnp_pengarang" value="" required>
                            </div>

                            <div class="form-group">
                                <label for="bnp_klasifikasi"><strong>Klasifikasi</strong></label>
                                <input type="text" class="form-control " id="bnp_klasifikasi" name="bnp_klasifikasi" value="" required>
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
                                    <option value="fiksi">Fiksi</option>
                                    <option value="info">Info</option>
                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="bnp_harga"><strong>Harga</strong></label>
                                <input type="number" class="form-control " id="bnp_harga" name="bnp_harga" value="">
                            </div>

                            <div class="form-group">
                                <label for="bnp_keterangan"><strong>Keterangan</strong></label>
                                <input type="text" class="form-control " id="bnp_keterangan" name="bnp_keterangan" value="">
                            </div> -->


                            <div class="form-group">
                                <label for="bnp_jumlah_buku"><strong>Jumlah Buku</strong></label>
                                <input type="number" class="form-control " id="bnp_jumlah_buku" name="bnp_jumlah_buku" value="">
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