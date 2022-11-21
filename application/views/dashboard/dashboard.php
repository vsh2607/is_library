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
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>
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
                                    <td><a href="<?= base_url() ?>peminjaman/showDetail_np/<?= $bt['tr_kode'] ?>" class="badge badge-success badge-sm">Cek Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card" style="height: 300px;">
                <div class="card-header">

                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Modul Penggunaan</div>
                </div>
                <div class="card-body">
                    <h3>Modul Penggunaan</h3>
                    <br>
                    <p class="lh-sm">Modul ini kami buat untuk membantu pengguna Sistem Informasi Perpustakaan memahami cara penggunaan Sistem ini. Klik Tombol Unduh di bawah untuk mengunduh file modul.</p>
                </div>

                <div class="card-footer">
                    <a href="<?= base_url() ?>dashboard/download" class="btn btn-sm btn-success float-right"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
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