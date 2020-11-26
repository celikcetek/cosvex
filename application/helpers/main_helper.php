<?php

function email_ile_kullanici($email) {
    $t = get_instance();
    $t->load->model('oturum_model');

    return $t->oturum_model->email_ile_kullanici($email);
}