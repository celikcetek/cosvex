<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'anasayfa';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'oturum/kayit_sayfa';
$route['login'] = 'oturum/giris_sayfa';
$route['logout'] = 'oturum/cikis';

$route['fargot-password'] = 'oturum/sifre_unuttum';

$route['contact'] = 'oturum/iletisim';