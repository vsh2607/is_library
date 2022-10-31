<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Anggota</h6>
                </div>
                <div class="card-body">
                    <form action="<?=base_url()?>anggota/add" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="agt_no_id"><strong>No Identitas</strong></label>
                            <input type="number" class="form-control" id="agt_no_id" name="agt_no_id" value="<?=set_value('agt_no_id')?>">
                            <?= form_error('agt_no_id', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="agt_nama"><strong>Nama</strong></label>
                            <input type="text" class="form-control" id="agt_nama" name="agt_nama" value="<?=set_value('agt_nama')?>">
                            <?= form_error('agt_nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="agt_no_telp"><strong>No Telp</strong></label>
                            <input type="text" class="form-control" id="agt_no_telp" name="agt_no_telp" value="<?=set_value('agt_no_telp')?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="agt_dob"><strong>Tanggal Lahir</strong></label>
                            <input type="date" class="form-control" id="agt_dob" name="agt_dob" value="<?=set_value('agt_dob')?>">
                            <?= form_error('agt_dob', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="agt_alamat"><strong>Alamat</strong></label>
                            <input type="text" class="form-control " id="agt_alamat" name="agt_alamat" placeholder="Alamat" value="<?=set_value('agt_alamat')?>">
                            <?= form_error('agt_alamat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="agt_img_url"><strong>Upload Gambar</strong></label>
                            <p></p>
                            <input type="file" id="agt_img_url" name="agt_img_url">
                        </div>
                    

                        <div class="card-footer">
                            <button class="btn btn-primary mt-3 float-right" type="submit" name="add">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->