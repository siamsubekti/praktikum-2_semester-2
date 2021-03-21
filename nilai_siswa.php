<?php
include_once 'atas.php';
?>


<?php

    require_once 'libfungsi.php';

    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
    $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
    $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
    if (!empty($proses)) {
        echo '<br/>';
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas.'<br/>';
    }
    $_nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

    $_hasil_ujian = lulus($_nilai_akhir);
    $_hasil_grade = grade($_nilai_akhir);
    $_hasil_predikat = predikat($_hasil_grade);
    echo 'Nilai Akhir = '.$_nilai_akhir.'<br/>';
    echo 'Di nyatakan = '.$_hasil_ujian.'<br/>';
    echo 'Grade = '.$_hasil_grade.'<br/>';
    echo 'Predikat = '.$_hasil_predikat.'<br/>';
    
?>

<?php
include_once 'bawah.php';
?> 