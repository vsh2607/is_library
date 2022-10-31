<?php


class AnggotaModel extends CI_Model{

    public function add($anggotaImgUrl){

        $data = [
            'agt_img_url' => $anggotaImgUrl,
            'agt_nama' => $this->input->post('agt_nama'),
            'agt_no_id' => $this->input->post('agt_no_id'),
            'agt_dob' => $this->input->post('agt_dob'),
            'agt_no_telp' => $this->input->post('agt_no_telp'),
            'agt_alamat' => $this->input->post('agt_alamat'),
            'agt_created'=> date('Y-m-d')
        ];

        $this->db->insert('anggota', $data);
    }


    public function getAllData(){
       return $this->db->get('anggota')->result_array();
    }

    public function delete($noIdAnggota){
        $anggota = $this->getDataById($noIdAnggota);
        unlink(FCPATH . '/assets/images/anggota/'.$anggota['agt_img_url']);
        $this->db->delete('anggota', ['agt_kode' => $noIdAnggota]);
    }

    public function getDataById($noIdAnggota){
        return $this->db->get_where('anggota', ['agt_kode'=>$noIdAnggota])->row_array();
    }
}