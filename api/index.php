<?php
// Array Asosiatif
    // Key bukan numerik tapi kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Muhhammad Izzudian Al-Faiq",
        "nim" => "202210040311423",
        "jurusan" => "Ilmu Komunikasi",
        "email" => "aden@gmail.com",
        "profil" => "aden.jpg"
    ],
    [
        "nama" => "Muhhammad Fajar Hidayat Setiamukti",
        "nim" => "202210040311417",
        "jurusan" => "Ilmu Komunikasi",
        "email" => "fajar@gmail.com",
        "profil" => "fajar.jpg"
    ],
    [
        "nim" => "202210040311418",
        "nama" => "Jajang Bahroni Wicaksono Siek Lai Hong",
        "jurusan" =>"Ilmu Komunikasi",
        "email" => "lhg@gmail.com",
        "profil" => "jajang.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://gembiraloka.cloud/assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-family: Montserrat;
        }
        .img-be-responsive {
            width: 150px;
        }
        .bg-dark-me {
            background-color: #1c1c1c;
        }
        .bordered-hover {
            border: 4px #1c1c1c solid;
            transition: 500ms;
        }
        .bordered-hover:hover {
            border: 4px #46ED4A solid;
            transform: scale(1.01);
            box-shadow: 0px 0px 40px -3px rgba(0,0,0,0.1);
        }
        .mt--10 {
            margin-top: -10px;
        }

        .text-hovered {
            color: #1c1c1c;
            transition: 500ms;
        }
        .text-hovered:hover {
            color: #46ED4A;
        }
    </style>
</head>
<body class="container">
    
    <div class="project-title my-5">
        <img src="https://ik.imagekit.io/YxqeaZrcDev/Gembira_Loka/Logo/gembiraloka.cloud_min_logo-01.png?ik-sdk-version=javascript-1.4.3&updatedAt=1676597402894" alt="" width="150px">
        <h2 class="text-start fw-bold text-hovered mt-3">Data Mahasiswa</h2>
        <p class="mt--10 text-muted">Project - learn_php with <strong>Sandhika Galih</strong></p>
    </div>

    <div class="row row-cols-sm-1 row-cols-md-2 row-cols-1 gx-5 gy-4">
        <?php foreach ( $mahasiswa as $mhs ) :?>
            <div class="col">
                <div class="data-mahasiswa">

                    <div class="row align-items-center bg-white bordered-hover rounded-4 px-3 py-4">
                        <div class="col-md-4">
                            <section class="text-center">
                                <img src="img/<?= $mhs["profil"]; ?>" class="img-be-responsive rounded-circle">
                            </section>
                        </div>
                        <div class="col-md-8">
                            <div class="data m-3">
                                    <div class="bg-white shadow rounded-4 text-dark">
                                        <div class="px-4 py-3">
                                            <small class="mt-1"><?= $mhs["nim"]; ?></small>
                                            <h5 class="fw-bold" style="margin-top: -5px;"><?= $mhs["nama"]; ?></h5>   
                                        </div>                         
                                    </div>
                                    <section class="mt-3 d-flex">
                                        <span class="me-auto"><?= $mhs["jurusan"]; ?></span>
                                        <span><?= $mhs["email"]; ?></span>
                                    </section>
                            </div>
                        </div>
                    </div>

                </div>                   
            </div>
        <?php endforeach; ?>
    </div>

    <br><br><br>

    <script src="https://gembiraloka.cloud/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>