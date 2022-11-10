<?php

class PeminjamanModel extends CI_Model
{



    public function dateNow()
    {
        return date('Y-m-d');
    }

    public function getLatestPinjamData(){
        $this->db->order_by('tr_created', 'desc');
       return $this->db->get('transaksi')->row();
    }

    public function getJoinData(){
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('anggota', 'anggota.agt_kode = transaksi.agt_kode');
        $this->db->join('detail_transaksi', 'detail_transaksi.tr_kode = transaksi.tr_kode');
        return $this->db->get()->result_array;

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

        for ($i = 0; $i < count($post['bnp_id']); $i++) {
            $dataDetail = [
                'dt_denda' => 0,
                'tr_kode' => $topData->tr_kode,
                'bkp_no_induk' => null,
                'bnp_id' => $post['bnp_id'][$i],
                'dt_tgl_kembali' => $post['dt_tgl_kembali'][$i],
                'dt_is_returned' => '0'
            ];
            
            $this->db->insert('detail_transaksi', $dataDetail);
        }
    }
}
