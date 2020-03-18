Deskripsi Sistem Informasi
Sistem Informasi Desa sederhana ini sistem infromasti tentang pencatatan penduduk di suatu desa. Sistem Informasi ini juga dapat menambahkan admin, login dan logout. Untuk Registrasinya admin lainnya harus membuatkannya lewat menu manajemen akses.


1. pertama nyalakan XAMPP agar dapat menjalankan localhost dan phpmyadmin
2. Kemudian atur konfigurasi seperti
di config/autoload.php
```php
<?php
	defined('BASEPATH')  OR  exit('No direct script access allowed');
	$autoload['packages']  =  array();
	$autoload['libraries']  =  array('database',  'form_validation',  'session');
	$autoload['drivers']  =  array();
	$autoload['helper']  =  array('url',  'form');
	$autoload['config']  =  array();
	$autoload['language']  =  array();
	$autoload['model']  =  array();
?>
```php

di config/config.php
```php
<?php
	defined('BASEPATH')  OR  exit('No direct script access allowed');
	$config['base_url']  =  'http://localhost/inidesaku/';
	$config['index_page']  =  ''; //dikosongkan karena kita sudah menggunakan .htaccess untuk menghilangkan index.php untuk penulisan url lebih mudah
?>
```php

di config/database
```php
<?php
$autoload['libraries'] = array('database', 'form_validation', 'session');
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'inidesaku', //nama database
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
?>
```php

di config/routes.php
```php
<?php
	$route['default_controller']  =  'dashboard';  //kontroller default
$route['404_override']  =  '';
$route['translate_uri_dashes']  =  FALSE;
?>
```php 
