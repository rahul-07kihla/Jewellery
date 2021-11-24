<?php

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","svs");
define("DB_NAME","sam_test_rahul");

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// print_r($conn);
// exit;

$servername = "http://".$_SERVER['SERVER_NAME'];

define("SLIDER_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/jewellery/assets/image/imageslider/");
define("SLIDER_UPLOAD", $servername . "/jewellery/assets/image/imageslider/");

define("CATEGORY_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/jewellery/assets/image/imagecategory/");
define("CATEGORY_UPLOAD", $servername . "/jewellery/assets/image/imagecategory/");

define("PRODUCT_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/jewellery/assets/image/imageproduct/");
define("PRODUCT_UPLOAD", $servername . "/jewellery/assets/image/imageproduct/");

define("LOGO_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/jewellery/assets/image/image/");
define("LOGO_UPLOAD", $servername . "/jewellery/assets/image/image/");

define("PROFILE_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/jewellery/assets/image/userProfile/");
define("PROFILE_UPLOAD", $servername . "/jewellery/assets/image/userProfile/");
?>