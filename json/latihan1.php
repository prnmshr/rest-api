<?php

// $mahasiswa = [
//     [
//     "nama" => "Purnama Ashari",
//     "nim" => "H1101211065",
//     "email" => "iniemail@student.untan.ac.id"
//     ],

//     [
//         "nama" => "Sie Exx",
//         "nim" => "H1101211066",
//         "email" => "inijugaemail@student.untan.ac.id"
//     ]
// ];

//var_dump($mahasiswa);

// ganti komentar untuk menjalankan program di atas
//hubungkan ke database localhost anda untuk menjalankan program di bawah

$dbh = new PDO('mysql:host=localhost;dbname=h1101211065', 'root');
$db = $dbh->prepare('select * from barang');
$db->execute();
$barang = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($barang);
echo $data;


?>
