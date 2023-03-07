<?php

    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];

    echo 'Nama Mahasiswa : ' .$nama;
    echo '<br> Mata Kuliah : ' .$matkul;
    echo '<br> Nilai UTS : ' .$uts;
    echo '<br> Nilai UAS : ' .$uas;
    echo '<br> Nilai Tugas : ' .$tugas; 

    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];

    $total_nilai = 0.3 * $uts + 0.35 * $uas + 0.35 * $tugas;

    if ($total_nilai > 55) {
        echo "<br>Lulus";
    } else {
        echo "<br>Tidak Lulus ";
    }
     

    if ($total_nilai < 0 || $total_nilai > 100) {
    $grade = "I";
    } elseif ($total_nilai >= 85) {
    $grade = "A";
    } elseif ($total_nilai >= 70) {
    $grade = "B";
    } elseif ($total_nilai >= 56) {
    $grade = "C";
    } elseif ($total_nilai >= 36) {
    $grade = "D";
    } else {
    $grade = "E";
    }

    echo "<br>Grade : " . $grade;

    switch ($grade) {
        case 'A':
            # code...
        echo "<br>Keterangan : Sangat Memuaskan";
            break;
        case 'B':
            # code...
        echo "<br>Keterangan : Memuaskan";
            break;
        case 'C':
            # code...
        echo "<br>Keterangan : Cukup";
            break;
        case '':
            # code...
        echo "<br>Keterangan : Kurang";
            break;
        case 'E':
            # code...
        echo "<br>Keterangan : Sangat Kurang";
            break;
        
        default:
            # code...
        echo "<br>Keterangan : Invalid";
            break;
    }
?>
