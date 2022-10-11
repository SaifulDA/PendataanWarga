<?php

class WargaModel extends CI_Model
{
    public function getWarga()
    {
        return $this->db->get('warga');
    }

    public function getWargaById($id_warga)
    {
        return $this->db->get_where('warga', ['id_warga' => $id_warga])->row_array();
    }

    public function insertData($data = null)
    {
        return $this->db->insert('warga', $data);
    }

    public function deleteData($id_warga)
    {
        return $this->db->delete('warga', ['id_warga' => $id_warga]);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('warga', $where);
    }

    public function editData()
    {
        $data = [
            'nik_warga' => $this->input->post('nik_warga', true),
            'nama_warga' => $this->input->post('nama_warga', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'alamat' => $this->input->post('alamat', true),
            'kelurahan' => $this->input->post('kelurahan', true),
            'kecamatan' => $this->input->post('kecamatan', true),
            'kabupaten_kota' => $this->input->post('kabupaten_kota', true),
            'provinsi' => $this->input->post('provinsi', true),
            'negara' => $this->input->post('negara', true),
            'rt_rw' => $this->input->post('rt_rw', true),
            'agama' => $this->input->post('agama', true),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'status_warga' => $this->input->post('status_warga', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
        ];

        $this->db->where('nik_warga', $this->input->post('nik_warga'));
        $this->db->update('warga', $data);
    }

    public function countAll()
    {
        return $this->db->get('warga')->num_rows();
    }

    public function countJenisKelamin($jenis_kelamin)
    {
        return $this->db->where('jenis_kelamin', $jenis_kelamin)->count_all_results('warga');
    }

    public function getDataPagination($limit, $start)
    {
        return $this->db->get('warga', $limit, $start)->result_array();
    }
}
