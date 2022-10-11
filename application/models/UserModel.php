<?php

class UserModel extends CI_Model
{
    public function getUser()
    {
        return $this->db->get('user');
    }

    public function insertData($data = null)
    {
        return $this->db->insert('user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function countAllUser()
    {
        return $this->db->count_all('user');
    }

    public function editUser()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'username' => $this->input->post('username', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
}
