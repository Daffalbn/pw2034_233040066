<?php
//Array Associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Dafa Al Bani",
        "nrp" => "233040066",
        "email" => "daffaaibani56@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dapa.jpeg.jpg" 
    ],
    [
        "nama" => "Muhammad Hilmy Yasirurrizqy",
        "nrp" => "233040047",
        "email" => "adasaja2134@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2 (1).jpeg.jpg"
    ],
    [
        "nama" => "Chalida Rahma Listy Hidayat",
        "nrp" => "233040046",
        "email" => "chalidarlh@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "chalida.jpeg.jpg"
    ],
    [
        "nama" => "Ghani Ali Yandi ",
        "nrp" => "233040049",
        "email" => "ghanialiyandi12345@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "gani.jpeg.jpg"
    ],
    [
        "nama" => "Muhamad Haikal Abinawa ",
        "nrp" => "233040083",
        "email" => "haikalabi29@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hekal (1).jpeg.jpg"
    ],
    [
        "nama" => "M. Sufi Nadziffa",
        "nrp" => "233040044",
        "email" => "nadziffa123@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sufi (1).jpeg.jpg"
    ],
    [
        "nama" => "Jhosua Jeremia Matulessy",
        "nrp" => "233040064",
        "email" => "jhosuajeremiamatulessy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jo (1).jpeg.jpg"
    ],
    [
        "nama" => "Rafi Safiq Mulyadi",
        "nrp" => "233040023",
        "email" => "rafisafiq556@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "safiq (1).jpeg.jpg"
    ],
    [
        "nama" => "M. Wilmar Rizky",
        "nrp" => "233040050",
        "email" => "wilmarardhana9@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "siwil (1).jpeg.jpg"
    ],
    [
        "nama" => "Zaki Ramadhan",
        "nrp" => "233040053",
        "email" => "zakiwijaya63@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ZakiRmdhn (1).jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>