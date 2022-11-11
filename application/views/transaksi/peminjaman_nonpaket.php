<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-5">
                            <h6 class="m-0 font-weight-bold text-primary">Pinjam Buku Non Paket</h6>

                        </div>
                        <div class="col-3"></div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>

                <form action="<?= base_url() ?>peminjaman/pinjamNonPaket" method="POST">



                    <div class="card-body">
                        <div class="form-group">
                            <label for="agt_nama"><strong>Nama Anggota</strong></label>
                            <select name="agt_kode" id="agt_kode" class="form-control">
                                <option value="" selected disabled>Pilih Anggota...</option>
                                <?php foreach ($data_anggota as $da) : ?>
                                    <option value="<?= $da['agt_kode'] ?>"><?= $da['agt_nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            </datalist>
                        </div>



                        <div class="form-group">
                            <label for="tr_tgl_pinjam"><strong>Tanggal Peminjaman</strong></label>
                            <input type="date" value="<?= $date_now ?>" class="form-control" name="tr_tgl_pinjam" id="tr_tgl_pinjam">
                        </div>

                        <div class="form-group">
                            <label for="tr_kelas_peminjam"><strong>Kelas</strong></label>
                            <select name="tr_kelas_peminjam" id="tr_kelas_peminjam" class="form-control">
                                <option value="" selected disabled>--Pilih Kelas--</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>


                        <!-- <tr><td><input type="text" class="form-control"></td><td><input type="date" class="form-control"></td><td><button class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" /></svg></button></td></tr> -->

                        <label for=""><strong>Buku yang ingin dipinjam </strong></label>
                        <input id="button" class="btn btn-sm btn-success" type="button" value="Add" onclick="AddData()">
                        <br>
                        <br>
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


<script>
    function deleterow(el) {
        $(el).closest('tr').remove();
    }

    function AddData() {
        var rows = "";
        rows +=
            "<tr>" +
            "<td>" +

            "<select name='bnp_id[]' id='bnp_id' class='form-control'>" +
            "<option value='' selected disabled>Pilih Buku...</option>" +

            "<?php foreach ($data_buku_nonpaket as $dbn) : ?>" +
            "<option value='<?= $dbn['bnp_id'] ?>'><?= $dbn['bnp_judul_buku'] ?></option>" +
            "<?php endforeach; ?>" +
            "</select>" +
            "</td>" +

            "<td>" +
            "<input type='date' class='form-control' value='<?=$date_one_week?>' name='dt_tgl_kembali[]' id='dt_tgl_kembali'>" +
            "</td>" +

            "<td>" +
            "<button class='btn btn-danger btn-sm' onclick = deleterow(this)>Delete</button>" +
            "</td>" +
            "</tr>"
        $(rows).appendTo("#list tbody");
    }
</script>