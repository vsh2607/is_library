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

    

    public function pinjam()
    {
        $post = $this->input->post();



        $data = [
            'tr_tgl_pinjam' => $this->input->post('tr_tgl_pinjam'),
            'agt_kode' => $this->input->post('agt_kode'),
            'tr_kelas_peminjam' => $this->input->post('tr_kelas_peminjam'),
            'tr_created' => time()
           
        ];

//         dt_kode
// dt_denda
// tr_kode
// bkp_no_induk
// bnp_id
// dt_tgl_kembali
// dt_is_returned


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
