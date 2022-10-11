<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email') && !$ci->session->userdata('nik_warga')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Akses ditolak. Anda belum login</div>');
        redirect('auth/login');
    } else {
        $id = $ci->session->userdata('id');
        $username = $ci->session->userdata('username');
        $status = $ci->session->userdata('status');
        $id_warga = $ci->session->userdata('id_warga');
        $nik_warga = $ci->session->userdata('nik_warga');
    }
}

// if (!$ci->session->userdata('nik_warga')) {
//     $ci->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Akses ditolak. Anda belum login</div>');
//     redirect('auth/login_warga');
// } else {
//     $id_warga = $ci->session->userdata('id_warga');
//     $nik_warga = $ci->session->userdata('nik_warga');
// }