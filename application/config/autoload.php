<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['libraries'] = array('database', 'session', 'form_validation', 'pagination');
$autoload['helper'] = array('url', 'form', 'html', 'security');
$autoload['config'] = array();  // Jika ada konfigurasi tambahan
$autoload['language'] = array();
$autoload['model'] = array('Mahasiswa_model', 'Kandidat_model', 'Vote_model');
?>