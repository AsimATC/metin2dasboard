<?php

$mysqlsunucu = "localhost";
$mysqladi = "metin2";
$mysqlkullanici = "root";
$mysqlsifre = "";

try {

    $db = new PDO("mysql:host=$mysqlsunucu;dbname=$mysqladi;charset=utf8", $mysqlkullanici, $mysqlsifre);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Bağlantı hatası: " . $e->getMessage();
}

session_start();
ob_start();