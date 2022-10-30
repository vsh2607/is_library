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
    agt_alamat varchar(200) not null
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

create table buku(
    bk_no_induk varchar(100) not null primary key,
    bk_kategori_buku enum('Fks', 'PA', 'PPKN', 'Bind', 'Bing', 'Mtk', 'EkA', 'Sej', 'Sos', 'Geo', 'Senbud', 'TIK', 'PKWU', 'PJOK', 'Bio', 'Fisika', 'Jawa'),
    bk_judul_buku varchar(200) not null,
    bk_pengarang  varchar(200) not null,
    bk_penerbit varchar(200) not null,
    bk_tahun_terbit int not null,
    bk_sumber_asal enum('beli', 'bantuan') not null,
    bk_jumlah_buku int not null

);

create table transaksi(
  tr_kode int not null primary key auto_increment,
  tr_tgl_pinjam date,
  agt_kode int,
  foreign key (agt_kode) references anggota (agt_kode)

);



create table detail_transaksi(
    dt_kode int not null primary key auto_increment,
    dt_denda int,
    tr_kode int not null,
    bk_no_induk varchar(100) not null,
    dt_tgl_kembali date,
    dt_is_returned enum('1','0'),
    foreign key (tr_kode) references transaksi(tr_kode),
    foreign key (bk_no_induk) references buku (bk_no_induk)
);