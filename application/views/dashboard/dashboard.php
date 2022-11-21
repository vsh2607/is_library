<style>
    table {
        overflow-y: scroll;
        height: 100px;
        display: block;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Selamat Datang di SI PERPUS</h1>

    </div>


    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="<?= base_url() ?>anggota">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Siswa</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_anggota ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="<?= base_url() ?>buku">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Buku Paket</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_buku_paket ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->


        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <a href="<?= base_url() ?>buku/index2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Buku Non-Paket</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_buku_nonpaket ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>








    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-6">
            <div class="card" style="height: 400px;">
                <div class="card-header">

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        List Siswa Terlambat Mengembalikan Buku Non-Paket</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover align-center" style="height: 300px;">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Hari Terlambat</th>
                                <th>Judul Buku</th>
                                <th>Denda</th>
                                <th>Detail</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($buku_terlambat as $bt) : ?>
                                <tr>
                                    <td><?= $bt['agt_nama'] ?></td>
                                    <td class="text-danger"><?= $bt['diff'] ?> Hari</td>
                                    <td><?= $bt['bnp_judul_buku'] ?></td>
                                    <td>Rp.<?= (int)$bt['diff']  * 1000; ?></td>
                                    <td><a href="<?= base_url() ?>peminjaman/showDetail_np/<?= $bt['tr_kode'] ?>" class="badge badge-warning badge-sm">Cek Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="height: 350px;">
                <div class="card-header">

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Modul Penggunaan</div>
                </div>
                <div class="card-body">

                </div>

                <div class="card-footer">
                    <a href="<?=base_url()?>dashboard/download" class="btn btn-sm btn-success float-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg> Unduh</a>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->