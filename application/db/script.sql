drop database _siperpus;
create database _siperpus;
use _siperpus;


create table anggota(
    agt_kode int not null primary key auto_increment,
    agt_img_url varchar(200),
    agt_no_id int not null,
    agt_nama varchar(150) not null,
    agt_no_telp varchar(100),
    agt_dob date not null,
    agt_alamat varchar(200) not null,
    agt_created date,
    agt_jumlah_pinjam_buku int
);



create table staff(
    st_kode int not null primary key auto_increment,
    st_img_url varchar(200),
    st_no_id int not null,
    st_nama varchar(150) not null,
    st_role enum('admin', 'superadmin'),
    st_no_telp varchar(100),
    st_dob date not null,
    st_alamat varchar(200) not null,
    st_username varchar(200),
    st_password varchar(500),
    st_date_created int

);

create table buku_paket(
    bkp_no_induk varchar(100) not null primary key,
    bkp_kategori_buku enum('Fks', 'PA', 'PPKN', 'Bind', 'Bing', 'Mtk', 'EkA', 'Sej', 'Sos', 'Geo', 'Senbud', 'TIK', 'PKWU', 'PJOK', 'Bio', 'Fisika', 'Jawa'),
    bkp_judul_buku varchar(200) not null,
    bkp_pengarang  varchar(200) not null,
    bkp_penerbit varchar(200) not null,
    bkp_tahun_terbit int not null,
    bkp_kelas enum('X', 'XI', 'XII', 'None') not null,
    bkp_sumber_asal enum('beli', 'bantuan') not null,
    bkp_jumlah_buku int not null

);


create table buku_non_paket(
    bnp_id int not null primary key auto_increment,
    bnp_no_inventaris int not null, 
    bnp_judul_buku varchar(200) not null,
    bnp_pengarang  varchar(200) not null,
    bnp_klasifikasi  varchar(100) not null,
    bnp_sumber_asal enum('beli', 'hadiah'),
    bnp_bahasa enum('asing', 'indonesia'),
    bnp_macam enum('teks', 'fakta', 'fiksi', 'info'),
    bnp_harga int,
    bnp_keterangan varchar(200),
    bnp_jumlah_buku int not null
);


create table transaksi(
  tr_kode int not null primary key auto_increment,
  tr_tgl_pinjam date,
  agt_kode int,
  tr_kelas_peminjam enum('X', 'XI', 'XII'),
  tr_created int,
  tr_jumlah_transaksi int,
  foreign key (agt_kode) references anggota (agt_kode)

);


create table detail_transaksi(
    dt_kode int not null primary key auto_increment,
    dt_denda int,
    tr_kode int not null,
    bkp_no_induk varchar(100),
    bnp_id int, 
    dt_tgl_kembali date,
    dt_is_returned enum('1','0'),
    foreign key (tr_kode) references transaksi(tr_kode),
    foreign key (bnp_id) references buku_non_paket(bnp_id),
    foreign key (bkp_no_induk) references buku_paket(bkp_no_induk)
);



INSERT INTO `staff` (`st_kode`, `st_img_url`, `st_no_id`, `st_nama`, `st_role`, `st_no_telp`, `st_dob`, `st_alamat`, `st_username`, `st_password`, `st_date_created`) VALUES (NULL, 'default.jpg', '123', 'Admin', 'admin', '123', '2022-11-22', '123', 'admin', 'admin', NULL);

