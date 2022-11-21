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
                        List Siswa Terlambat Mengembalikan Buku</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover align-center" style="height: 300px;">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jumlah Hari Terlambat</th>
                                <th>Judul Buku</th>
                                <th>Detail</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr>
                                    <td>Valentino Sas Henry</td>
                                    <td>12 Hari</td>
                                    <td>Hari Merdeka</td>
                                    <td><a href="" class="btn btn-warning btn-sm">Cek Detail</a></td>
                                </tr>
                                <tr>
                                    <td>Valentino Sas Henry</td>
                                    <td>12 Hari</td>
                                    <td>Hari Merdeka</td>
                                    <td><a href="" class="btn btn-warning btn-sm">Cek Detail</a></td>
                                </tr>
                                <tr>
                                    <td>Valentino Sas Henry</td>
                                    <td>12 Hari</td>
                                    <td>Hari Merdeka</td>
                                    <td><a href="" class="btn btn-warning btn-sm">Cek Detail</a></td>
                                </tr>
                                <tr>
                                    <td>Valentino Sas Henry</td>
                                    <td>12 Hari</td>
                                    <td>Hari Merdeka</td>
                                    <td><a href="" class="btn btn-warning btn-sm">Cek Detail</a></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->