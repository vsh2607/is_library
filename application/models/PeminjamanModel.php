<?php

class PeminjamanModel extends CI_Model
{


    public function dateNow()
    {
        return date('Y-m-d');
    }

    public function oneYearFromNow()
    {

        return  date('Y-m-d', strtotime('+182 day'));
    }

    public function oneWeekFromNow()
    {
        return  date('Y-m-d', strtotime('+7 day'));
    }

    public function getLatestPinjamData()
    {
        $this->db->order_by('tr_created', 'desc');
        return $this->db->get('transaksi')->row();
    }

    public function getDetailTransaksiNonPaket($kodeTransaksi)
    {
        $this->db->select('*')->from('transaksi');
        $this->db->join('anggota', 'anggota.agt_kode = transaksi.agt_kode');
        $this->db->join('detail_transaksi', 'detail_transaksi.tr_kode = transaksi.tr_kode');
        $this->db->join('buku_non_paket', 'buku_non_paket.bnp_id = detail_transaksi.bnp_id');
        $this->db->where('bkp_no_induk', null);
        $this->db->where('transaksi.tr_kode',  $kodeTransaksi);
        $result = $this->db->get()->result_array();


        return $result;
    }


    public function getTransaksiNonPaket()
    {
        $this->db->select('*')->from('transaksi');
        $this->db->join('anggota', 'anggota.agt_kode = transaksi.agt_kode');
        $this->db->join('detail_transaksi', 'detail_transaksi.tr_kode = transaksi.tr_kode');
        $this->db->where('bkp_no_induk', null);
        $this->db->group_by('transaksi.tr_kode');
        $this->db->order_by('tr_jumlah_transaksi', 'DESC');

        $result =  $this->db->get()->result_array();

        return $result;
    }


    public function returnBukuNP($noIdBuku, $kodeTransaksi, $noDetailTransaksi)
    {
        $data = [
            'dt_is_returned' => '1'
        ];

        $this->db->where('dt_kode', $noDetailTransaksi);
        $this->db->where('bnp_id', $noIdBuku);
        $this->db->update('detail_transaksi', $data);
        $this->increaseJumlahBuku($noDetailTransaksi, $noIdBuku);
        $this->reduceJumlahTransaksiNP($kodeTransaksi);
    }


    public function reduceJumlahTransaksiNP($kodeTransaksi)
    {
        $this->db->select('tr_jumlah_transaksi')->from('transaksi');
        $this->db->where('tr_kode', $kodeTransaksi);

        $totalTransaksi = $this->db->get()->row()->tr_jumlah_transaksi;

        $data = [
            'tr_jumlah_transaksi' => (int)$totalTransaksi - 1
        ];

        $this->db->where('tr_kode', $kodeTransaksi);
        $this->db->update('transaksi', $data);
    }


    public function pinjamPaket()
    {
        $post = $this->input->post();

        $data = [
            'tr_tgl_pinjam' => $this->input->post('tr_tgl_pinjam'),
            'agt_kode' => $this->input->post('agt_kode'),
            'tr_kelas_peminjam' => $this->input->post('tr_kelas_peminjam'),
            'tr_created' => time()

        ];

        $this->db->insert('transaksi', $data);
        $topData =  $this->getLatestPinjamData();
    }




    public function pinjamNonPaket()
    {
        $post = $this->input->post();

        $data = [
            'tr_tgl_pinjam' => $this->input->post('tr_tgl_pinjam'),
            'agt_kode' => $this->input->post('agt_kode'),
            'tr_kelas_peminjam' => $this->input->post('tr_kelas_peminjam'),
            'tr_created' => time()

        ];


        $this->db->insert('transaksi', $data);
        $topData =  $this->getLatestPinjamData();

        $totalBuku = 0;
        for ($i = 0; $i < count($post['bnp_id']); $i++) {
            $dataDetail = [
                'dt_denda' => 0,
                'tr_kode' => $topData->tr_kode,
                'bkp_no_induk' => null,
                'bnp_id' => $post['bnp_id'][$i],
                'dt_tgl_kembali' => $post['dt_tgl_kembali'][$i],
                'dt_is_returned' => '0'
            ];
            $totalBuku++;
            $this->db->insert('detail_transaksi', $dataDetail);
            $this->reduceJumlahBukuNP($dataDetail['bnp_id']);
        }

        $dataUpdate = [
            'tr_jumlah_transaksi' => $totalBuku
        ];


        $this->db->where('tr_kode', $topData->tr_kode);
        $this->db->update('transaksi', $dataUpdate);
    }


    public function reduceJumlahBukuNP($noIdBuku)
    {
        $this->db->select('bnp_jumlah_buku');
        $this->db->where('bnp_id', $noIdBuku);
        $totalBuku = $this->db->get('buku_non_paket')->row();


        $data =
            ['bnp_jumlah_buku' => (int)$totalBuku->bnp_jumlah_buku - 1];


        $this->db->where('bnp_id', $noIdBuku);
        $this->db->update('buku_non_paket', $data);
    }


    public function increaseJumlahBuku($noDetailTransaksi, $noIdBuku)
    {
        $this->db->select('*')->from('detail_transaksi');
        $this->db->join('buku_non_paket', 'buku_non_paket.bnp_id = detail_transaksi.bnp_id');
        $this->db->where('detail_transaksi.dt_kode', $noDetailTransaksi);
        $jumlahBuku = $this->db->get()->row()->bnp_jumlah_buku;

        $data = [
            'bnp_jumlah_buku' => (int)$jumlahBuku + 1
        ];

        $this->db->where('bnp_id', $noIdBuku);
        $this->db->update('buku_non_paket', $data);
    }
}
