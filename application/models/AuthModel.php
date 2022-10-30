<?php

class AuthModel extends CI_Model
{

    public function getLoginData()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ];

        return $data;
    }
}