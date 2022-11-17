<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- perpus21
    l)#7v5snyBlXRZ!gsMGF -->
    <!-- MkzTmf4@!RHbYLXZa$yG -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-5">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Buku Paket<span></span></h6>
                    <br>
                    <a class="btn btn-primary btn-sm" href="<?= base_url() ?>buku/index2"><small>Buku Non Paket</small></a> |
                    <a class="btn btn-primary btn-sm" href="<?= base_url() ?>buku"><small>Buku Paket</small></a>

                </div>
                <div class="col-3"></div>
                <div class="col-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Cari Buku...">
                    </div>
                    <br>
                    <a class="btn btn-sm btn-primary float-right mx-2" href="<?= base_url() ?>buku/add"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
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
                                <td class="align-middle text-center bkp_no_induk"><?= $db['bkp_no_induk'] ?></td>
                                <td class="align-middle text-center bkp_judul_buku"><?= $db['bkp_judul_buku'] ?></td>
                                <td class="align-middle text-center bkp_kategori_buku"><?= $db['bkp_kategori_buku'] ?></td>
                                <td class="align-middle text-center bkp_pengarang"><?= $db['bkp_pengarang'] ?></td>
                                <td class="align-middle text-center bkp_penerbit"><?= $db['bkp_penerbit'] ?></td>
                                <td class="align-middle text-center bkp_tahun_terbit"><?= $db['bkp_tahun_terbit'] ?></td>
                                <td class="align-middle text-center bkp_sumber_asal"><?= $db['bkp_sumber_asal'] ?></td>
                                <td class="align-middle text-center bkp_kelas"><?= $db['bkp_kelas'] ?></td>
                                <td class="align-middle text-center bkp_jumlah_buku"><?= $db['bkp_jumlah_buku'] ?></td>
                                <td class="align-middle text-center">
                                    <!--Update-->
                                    <a href="#" data-toggle="modal" data-target="#updateModal" class="btn btn-sm btn-warning btn_update"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>

                                    <!--Delete-->
                                    <a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger btn_delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></a>

                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>


                    <script>
                        $(document).ready(function() {


                            $(document).on('click', '.btn_delete', function() {

                                var bkp_no_induk = $(this).closest('tr').find('.bkp_no_induk').text();
                                let link = document.getElementById('btn_hapus');
                                link.href = "<?= base_url() ?>buku/delete/" + bkp_no_induk.trim();
                            });



                            $(document).on('click', '.btn_update', function() {

                                var bkp_no_induk = $(this).closest('tr').find('.bkp_no_induk').text();
                                var bkp_judul_buku = $(this).closest('tr').find('.bkp_judul_buku').text();
                                var bkp_kategori_buku = $(this).closest('tr').find('.bkp_kategori_buku').text();
                                var bkp_pengarang = $(this).closest('tr').find('.bkp_pengarang').text();
                                var bkp_penerbit = $(this).closest('tr').find('.bkp_penerbit').text();
                                var bkp_tahun_terbit = $(this).closest('tr').find('.bkp_tahun_terbit').text();
                                var bkp_sumber_asal = $(this).closest('tr').find('.bkp_sumber_asal').text();
                                var bkp_kelas = $(this).closest('tr').find('.bkp_kelas').text();
                                var bkp_jumlah_buku = $(this).closest('tr').find('.bkp_jumlah_buku').text();

                                document.getElementById('bkp_no_induk').value = bkp_no_induk;
                                document.getElementById('bkp_judul_buku').value = bkp_judul_buku;
                                document.getElementById('bkp_kategori_buku').value = bkp_kategori_buku;
                                document.getElementById('bkp_pengarang').value = bkp_pengarang;
                                document.getElementById('bkp_penerbit').value = bkp_penerbit;
                                document.getElementById('bkp_tahun_terbit').value = bkp_tahun_terbit;
                                document.getElementById('bkp_sumber_asal').value = bkp_sumber_asal;
                                document.getElementById('bkp_kelas').value = bkp_kelas;
                                document.getElementById('bkp_jumlah_buku').value = bkp_jumlah_buku;
                                document.getElementById('formBukuUpdate').action = "<?= base_url() ?>buku/edit/" + bkp_no_induk.trim();


                            })

                        });
                    </script>

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
                    <?php if ($db['bkp_no_induk'] !== null) { ?>
                        <form id="formBukuUpdate" action="" method="post" enctype="multipart/form-data">


                            <div class="form-group">
                                <label for="bkp_no_induk"><strong>No ID Buku</strong></label>
                                <input type="number" class="form-control" id="bkp_no_induk" name="bkp_no_induk" readonly value="">
                                <?= form_error('bkp_no_induk', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="bkp_kategori_buku"><strong>Kategori Buku</strong></label>
                                <select id="bkp_kategori_buku" class="form-control" name="bkp_kategori_buku">
                                    <option selected id="bkp_kategori_buku" value=""></option>
                                    <option value="Pendidikan Agama">Pendidikan Agama</option>
                                    <option value="PPKN">PPKN</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Ekonomi Akuntansi">Ekonomi Akuntansi</option>
                                </select>
                                
                            </div>

                            <div class="form-group">
                                <label for="bkp_judul_buku"><strong>Judul Buku</strong></label>
                                <input type="text" class="form-control " id="bkp_judul_buku" name="bkp_judul_buku" value="">
                                <?= form_error('bkp_judul_buku', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                            <div class="form-group">
                                <label for="bkp_pengarang"><strong>Pengarang</strong></label>
                                <input type="text" class="form-control " id="bkp_pengarang" name="bkp_pengarang" value="">
                                <?= form_error('bkp_pengarang', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="bkp_penerbit"><strong>Penerbit</strong></label>
                                <input type="text" class="form-control " id="bkp_penerbit" name="bkp_penerbit" value="">
                                <?= form_error('bkp_penerbit', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                            <div class="form-group">
                                <label for="bkp_tahun_terbit"><strong>Tahun Terbit</strong></label>
                                <input type="number" class="form-control " id="bkp_tahun_terbit" name="bkp_tahun_terbit" value="">
                                <?= form_error('bkp_tahun_terbit', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="bkp_sumber_asal"><strong>Sumber Asal</strong></label>
                                <select id="bkp_sumber_asal" class="form-control" name="bkp_sumber_asal" value="">
                                    <option selected disabled>Pilih Sumber Asal...</option>
                                    <option value="Beli">Beli</option>
                                    <option value="Bantuan">Bantuan</option>
                                </select>
                                <?= form_error('bkp_sumber_asal', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <div class="form-group">
                                <label for="bkp_kelas"><strong>Kelas Buku</strong></label>
                                <select id="bkp_kelas" class="form-control" name="bkp_kelas" value="">
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
                                <input type="number" class="form-control " id="bkp_jumlah_buku" name="bkp_jumlah_buku" value="">
                                <?= form_error('bkp_jumlah_buku', '<small class="text-danger pl-3">', '</small>') ?>
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