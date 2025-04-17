<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['base_url'] = 'http://localhost/voting_app/';  // Sesuaikan dengan URL aplikasi kamu
$config['index_page'] = '';  // Untuk menghapus index.php dari URL
$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language'] = 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_'; // Jika ingin menambahkan subclass
$config['composer_autoload'] = FALSE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['log_threshold'] = 1; // 1 untuk log error
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['cache_path'] = '';
$config['encryption_key'] = 'your_random_encryption_key_here';  // Buat key yang kuat
$config['session_driver'] = 'files';
$config['session_cookie_name'] = 'ci_session';
$config['session_expiration'] = 7200; // 2 hours
$config['session_save_path'] = NULL;
$config['session_match_ip'] = FALSE;
$config['session_time_to_update'] = 300;
$config['session_regenerate_destroy'] = FALSE;

?>