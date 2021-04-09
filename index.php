<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', '1');
define('__PATH2INCLUDE__', dirname(__FILE__).'/include/');

$pages = array(
  'start' => array(
    'path' => '/',
    'title' => 'START'
  ),
  'about' => array(
    'path' => '/about',
    'title' => 'ABOUT'
  ),
  'contacts' => array(
    'path' => '/contacts',
    'title' => 'CONTACT'
  ),
  'team' => array(
    'path' => '/team',
    'title' => 'TEAM'
  ),
  'versions' => array(
    'path' => '/versions',
    'title' => 'VERSIONS'
  )
);

$page_key = 'start';

if (isset($_GET['page']) && isset($pages[$_GET['page']])) {
  $page_key = $_GET['page'];
}

if (isset($_POST['page']) && isset($pages[$_POST['page']])) {
  $page_key = $_POST['page'];
}

$page = $pages[$page_key];

require_once(__PATH2INCLUDE__.'main.php');
?>