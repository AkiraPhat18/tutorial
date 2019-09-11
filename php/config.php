<?php
header("Content-type: text/html; charset=utf-8");
/**
 *Khai báo hằng số kết nối cơ sở dữ liệu
 */
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","apptest");

/**
 * kết nối csdl
 */

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
mysqli_set_charset($conn, 'UTF8');
if ($conn->connect_error == true){
    die("Không thể kết nối đến cơ sở dữ liệu");
}