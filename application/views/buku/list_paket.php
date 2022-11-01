<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-5">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Buku Paket<span><a href="<?= base_url() ?>buku/add"> <strong>+</strong></a></span></h6>
                    <br>
                    <a href="<?= base_url() ?>buku/index2"><small>Buku Non Paket</small></a> |
                    <a href="<?= base_url() ?>buku"><small>Buku Paket</small></a>

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
                            <th class="align-middle text-center">NIB</th>
                            <th class="align-middle text-center">Judul Buku</th>
                            <th class="align-middle text-center">Kategori</th>
                            <th class="align-middle text-center">Pengarang</th>
                            <th class="align-middle text-center">Penerbit</th>
                            <th class="align-middle text-center">Tahun Terbit</th>
                            <th class="align-middle text-center">Sumber</th>
                            <th class="align-middle text-center">Kelas</th>
                            <th class="align-middle text-center">Jumlah Buku</th>
                            <th class="align-middle text-center">Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($data_buku as $db) : ?>
                            <tr>
                                <td class="align-middle text-center"><?= $no++ ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_no_induk'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_judul_buku'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_kategori_buku'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_pengarang'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_penerbit'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_tahun_terbit'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_sumber_asal'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_kelas'] ?></td>
                                <td class="align-middle text-center"><?= $db['bkp_jumlah_buku'] ?></td>
                                <td class="align-middle text-center">
                                    <!--Update-->
                                    <a href="#" data-toggle="modal" data-target="#updateModal" class="btn btn-sm btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>

                                    <!--Delete-->
                                    <a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
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
                    <a class="btn btn-danger" href="<?= base_url() ?>buku/delete/<?= $db['bkp_no_induk'] ?>">Delete</a>
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
                    <?php if ($da['agt_nama'] !== null) { ?>
                        <form action="<?= base_url() ?>anggota/edit/<?= $da['agt_img_url'] ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="agt_no_id"><strong>No Identitas</strong></label>
                                <input type="number" class="form-control" id="agt_no_id" name="agt_no_id" value="<?= $da['agt_no_id'] ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="agt_nama"><strong>Nama</strong></label>
                                <input type="text" class="form-control" id="agt_nama" name="agt_nama" value="<?= $da['agt_nama'] ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="agt_no_telp"><strong>No Telp</strong></label>
                                <input type="text" class="form-control" id="agt_no_telp" name="agt_no_telp" value="<?= $da['agt_no_telp'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="agt_dob"><strong>Tanggal Lahir</strong></label>
                                <input type="date" class="form-control" id="agt_dob" name="agt_dob" value="<?= $da['agt_dob'] ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="agt_alamat"><strong>Alamat</strong></label>
                                <input type="text" class="form-control " id="agt_alamat" name="agt_alamat" placeholder="Alamat" value="<?= $da['agt_alamat'] ?>" required>

                            </div>

                            <div class="form-group">
                                <label for="agt_img_url"><strong>Upload Gambar</strong></label>
                                <p></p>
                                <input type="file" id="agt_img_url" name="agt_img_url">
                            </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-warning" type="submit">Edit</button>
                    </form>

                <?php } ?>

                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->