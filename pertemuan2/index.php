<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output= Menampilkan Sesuatu Ke Layar
// echo, print
// untuk debugging
// print_r
// var_dump

// Penulisan sintaks PHP
// 1.PHP di dalam HTML
// 2.HTML di dalam PHP 

// Variabel dam Tipe data
// Variabel
// tidak boleh diawali angka,tapi boleh mengandung angka
$nama = "Ahmadddd";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $y*$x;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Ahmadd";
// $nama_belakang = "Rifai";
// echo $nama_depan . " " . $nama_belakang

// Assignment
// =,+=,-=,*=,/=,%=,.=
// $x =9;
// $x *=6;
// echo $x;

// $nama = "Ahmad";
// $nama .= " ";
// $nama .= "Rifai";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(5 <4);

// identitas
// ===, !==
// var_dump(5 === "5");

// Logika
// &&, ||, !
// $x = 50; 
// var_dump($x <60 && $x % 2 == 0);
?>
<!-- 1. PHP di dalam HTML -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
 </head>
 <body>
    <h1>Haloo Selamat Datang <?php echo $nama; ?></h1>
    <P><?php echo "Paragraf pake PHP"; ?></P>
    <!-- 2. Html di dalam php
    <?php 
        echo "<h1> Halo sekarang pake html</h1>"
    ?> -->
 </body>
 </html>

 