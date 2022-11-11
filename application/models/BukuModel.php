<?php


class BukuModel extends CI_Model
{

    public function getBukuPaketKelas($kelas)
    {
        return $this->db->get_where('buku_paket', ['bkp_kelas' => $kelas])->result_array();
    }


    //add Buku paket
    public function add()
    {

        $data = [
            'bkp_no_induk' => $this->input->post('bkp_no_induk'),
            'bkp_kategori_buku' => $this->input->post('bkp_kategori_buku'),
            'bkp_judul_buku' => $this->input->post('bkp_judul_buku'),
            'bkp_pengarang' => $this->input->post('bkp_pengarang'),
            'bkp_penerbit' => $this->input->post('bkp_penerbit'),
            'bkp_tahun_terbit' => $this->input->post('bkp_tahun_terbit'),
            'bkp_kelas' => $this->input->post('bkp_kelas'),
            'bkp_sumber_asal' => $this->input->post('bkp_sumber_asal'),
            'bkp_jumlah_buku' => $this->input->post('bkp_jumlah_buku')
        ];
        $this->db->insert('buku_paket', $data);
    }

    public function getAllPaket()
    {
        return $this->db->get('buku_paket')->result_array();
    }


    public function  getAllNonPaket()
    {
        return $this->db->get('buku_non_paket')->result_array();
    }

    public function delete($noIndukBuku)
    {
        $this->db->delete('buku_paket', ['bkp_no_induk' => $noIndukBuku]);
    }

    public function deleteN($noIndukBuku)
    {

        $this->db->delete('buku_non_paket', ['bnp_id' => $noIndukBuku]);
    }

    //add Buku Non paket
    public function addN()
    {

        $data = [
            'bnp_no_inventaris' => $this->input->post('bnp_no_inventaris'),
            'bnp_judul_buku' => $this->input->post('bnp_judul_buku'),
            'bnp_pengarang' => $this->input->post('bnp_pengarang'),
            'bnp_klasifikasi' => $this->input->post('bnp_klasifikasi'),
            'bnp_sumber_asal' => $this->input->post('bnp_sumber_asal'),
            'bnp_bahasa' => $this->input->post('bnp_bahasa'),
            'bnp_macam' => $this->input->post('bnp_macam'),
            'bnp_harga' => $this->input->post('bnp_harga'),
            'bnp_keterangan' => $this->input->post('bnp_keterangan'),
            'bnp_jumlah_buku' => $this->input->post('bnp_jumlah_buku')
        ];

        $this->db->insert('buku_non_paket', $data);
    }


    public function edit($noIdBuku)
    {


        $data = [
            'bkp_no_induk' => $this->input->post('bkp_no_induk'),
            'bkp_kategori_buku' => $this->input->post('bkp_kategori_buku'),
            'bkp_judul_buku' => $this->input->post('bkp_judul_buku'),
            'bkp_pengarang' => $this->input->post('bkp_pengarang'),
            'bkp_penerbit' => $this->input->post('bkp_penerbit'),
            'bkp_tahun_terbit' => $this->input->post('bkp_tahun_terbit'),
            'bkp_kelas' => $this->input->post('bkp_kelas'),
            'bkp_sumber_asal' => $this->input->post('bkp_sumber_asal'),
            'bkp_jumlah_buku' => $this->input->post('bkp_jumlah_buku')
        ];


        $this->db->where('bkp_no_induk', $noIdBuku);
        $this->db->update('buku_paket', $data);
    }

    public function editN($noIdBuku)
    {
        $data = [
            'bnp_no_inventaris' => $this->input->post('bnp_no_inventaris'),
            'bnp_judul_buku' => $this->input->post('bnp_judul_buku'),
            'bnp_pengarang' => $this->input->post('bnp_pengarang'),
            'bnp_klasifikasi' => $this->input->post('bnp_klasifikasi'),
            'bnp_sumber_asal' => $this->input->post('bnp_sumber_asal'),
            'bnp_bahasa' => $this->input->post('bnp_bahasa'),
            'bnp_macam' => $this->input->post('bnp_macam'),
            'bnp_harga' => $this->input->post('bnp_harga'),
            'bnp_keterangan' => $this->input->post('bnp_keterangan'),
            'bnp_jumlah_buku' => $this->input->post('bnp_jumlah_buku')
        ];


        $this->db->where('bnp_id', $noIdBuku);
        $this->db->update('buku_non_paket', $data);
    }
}
