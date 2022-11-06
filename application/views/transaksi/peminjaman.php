<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-5">
                            <h6 class="m-0 font-weight-bold text-primary">Pinjam Buku</h6>

                        </div>
                        <div class="col-3"></div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>

                <form action="" method="POST">



                    <div class="card-body">

                        <div class="form-group">
                            <label for="agt_nama"><strong>No Id Anggota</strong></label>
                            <input list="anggota" class="form-control" name="agt_nama" id="agt_nama" placeholder="--Cari Anggota--">

                            <datalist id="anggota">
                                <?php foreach ($data_anggota as $da) : ?>
                                    <option value="<?= $da['agt_no_id'] ?>"><?= $da['agt_nama'] ?></option>
                                <?php endforeach; ?>
                            </datalist>
                        </div>



                        <div class="form-group">
                            <label for="tr_tgl_pinjam"><strong>Tanggal Peminjaman</strong></label>
                            <input type="date" value="<?= $date_now ?>" class="form-control" name="tr_tgl_pinjam" id="tr_tgl_pinjam">
                        </div>

                        <div class="form-group">
                            <label for="tr_kelas_peminjam"><strong>Kelas</strong></label>
                            <input list="kelas" class="form-control" name="tr_kelas_peminjam" placeholder="--Pilih Kelas--">
                            <datalist id="kelas">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </datalist>
                        </div>

                        <?php


                        $q1 = "<?php foreach($" . "data_buku_nonpaket as $" . "db):?>";


                        $q4 = "<?php endforeach;?>";

                        ?>
                        <!-- <tr><td><input type="text" class="form-control"></td><td><input type="date" class="form-control"></td><td><button class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" /></svg></button></td></tr> -->
                        <script>
                            function deleterow(el) {
                                $(el).closest('tr').remove();
                            }

                            function AddData() {
                                var rows = "";
                                rows += "<tr><td><input list='buku' placeholder='--Pilih Buku--' class='form-control' name='bnp_id' id='bnp_id'>" + "<?php foreach ($data_buku_nonpaket as $db) : ?>" + "<datalist id='buku'><option value='" + "<?= $db['bnp_id'] ?>" + "'>" + "<?= $db['bnp_judul_buku'] ?>" + "</option></datalist>" + "<?php endforeach; ?>" + "</td><td><input type='date' class='form-control' name='dt_tgl_kembali' id='dt_tgl_kembali'></td><td><button onclick = deleterow(this)>Delete</button></td></tr>"
                                $(rows).appendTo("#list tbody");
                            }
                        </script>
                        <label for=""><strong>Buku yang ingin dipinjam </strong></label>
                        <input id="button" type="button" value="Add" onclick="AddData()">
                        <div class="table-responsive">
                            <table id="list" class="table center">
                                <thead>
                                    <tr>
                                        <th>Id Buku</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>


                    </div>




                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Proses
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- 
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-5">
                            <h6 class="m-0 font-weight-bold text-primary">List Peminjaman Buku</h6>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5">
                            <div class="input-group">
                                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Cari Peminjaman...">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card-body">

                </div>
            </div>
        </div> -->
    </div>






</div>