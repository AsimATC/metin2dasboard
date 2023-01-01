<?php
header('Location: coming.php');
//$mysqlsunucu = "localhost";
//$mysqladi = "ts25_gamedb";
//$mysqlkullanici = "ts25_gamedb";
//$mysqlsifre = "webrloadsky2";

$mysqlsunucu = "193.70.32.156";
$mysqladi = "ts25_gamedb";
$mysqlkullanici = "kib";
$mysqlsifre = "123123";

try {

    $db = new PDO("mysql:host=$mysqlsunucu;dbname=$mysqladi;charset=utf8", $mysqlkullanici, $mysqlsifre);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}


$mysqlsunucu_siparis = "localhost";
$mysqladi_siparis = "ts25_siparis";
$mysqlkullanici_siparis = "ts25_siparis";
$mysqlsifre_siparis = "hDBW9ik0";
try {

    $db_siparis = new PDO("mysql:host=$mysqlsunucu_siparis;dbname=$mysqladi_siparis;charset=utf8", $mysqlkullanici_siparis, $mysqlsifre_siparis);
    $db_siparis->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}

session_start();
ob_start();
