<?php


class AnggotaModel extends CI_Model
{


    public function getTotalAnggota(){
        $this->db->select('agt_nama');
        $this->db->from('anggota');
        $this->db->where('agt_is_deleted', 0);
        return  $this->db->count_all_results();

    }

    public function edit($anggotaKode, $latestImgUrl)
    {
        
        $anggota = $this->db->get_where('anggota', ['agt_kode' => $anggotaKode])->row_array();
        $anggotaImgUrl = $anggota['agt_img_url'];
        
        if ($latestImgUrl == null) {
            $data = [
                'agt_img_url' => $anggotaImgUrl,
                'agt_nama' => $this->input->post('agt_nama'),
                'agt_no_id' => $this->input->post('agt_no_id'),
                'agt_dob' => $this->input->post('agt_dob'),
                'agt_no_telp' => $this->input->post('agt_no_telp'),
                'agt_alamat' => $this->input->post('agt_alamat'),
            ];

            $this->db->where('agt_kode', $anggotaKode);
            $this->db->update('anggota', $data);
        } else {
            $data = [
                'agt_img_url' => $latestImgUrl,
                'agt_nama' => $this->input->post('agt_nama'),
                'agt_no_id' => $this->input->post('agt_no_id'),
                'agt_dob' => $this->input->post('agt_dob'),
                'agt_no_telp' => $this->input->post('agt_no_telp'),
                'agt_alamat' => $this->input->post('agt_alamat'),
            ];
          
            unlink(FCPATH . '/assets/images/anggota/' . $anggotaImgUrl);
           $this->db->where('agt_kode', $anggotaKode);
            $this->db->update('anggota', $data);
        }
    }

    public function add($anggotaImgUrl)
    {
       

        $data = [
            'agt_img_url' => $anggotaImgUrl,
            'agt_nama' => $this->input->post('agt_nama'),
            'agt_no_id' => $this->input->post('agt_no_id'),
            'agt_dob' => $this->input->post('agt_dob'),
            'agt_no_telp' => $this->input->post('agt_no_telp'),
            'agt_alamat' => $this->input->post('agt_alamat'),
            'agt_created' => date('Y-m-d')
        ];

        $this->db->insert('anggota', $data);
    }


    public function getAllData()
    {
        return $this->db->get('anggota')->result_array();
    }
    
    public function getAllAnggotaNonDeleted(){
        
        return $this->db->get_where('anggota', ['agt_is_deleted' => 0])->result_array();
    }

    public function delete($noIdAnggota)
    {
        $anggota = $this->getDataById($noIdAnggota);
        unlink(FCPATH . '/assets/images/anggota/' . $anggota['agt_img_url']);
        $this->db->delete('anggota', ['agt_kode' => $noIdAnggota]);
    }
    
    
    
    public function softDelete($noIdAnggota){
        $anggota = $this->getDataById($noIdAnggota);
        $data = ['agt_is_deleted' => 1];
        
        $this->db->where('agt_kode', $noIdAnggota);
        $this->db->update('anggota', $data);
    }



    public function getDataById($noIdAnggota)
    {
        return $this->db->get_where('anggota', ['agt_kode' => $noIdAnggota])->row_array();
    }
}
