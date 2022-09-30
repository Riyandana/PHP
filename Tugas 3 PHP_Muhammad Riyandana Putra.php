<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php
    
    $m1 = ["nim" => "001", "nama" => "Juan", "nilai" => 85];
    $m2 = ["nim" => "002", "nama" => "Pepe", "nilai" => 45];
    $m3 = ["nim" => "003", "nama" => "Pandi", "nilai" => 80];
    $m4 = ["nim" => "004", "nama" => "Kilan", "nilai" => 85];
    $m5 = ["nim" => "005", "nama" => "kiken", "nilai" => 50];
    $m6 = ["nim" => "006", "nama" => "Luis", "nilai" => 80];
    $m7 = ["nim" => "007", "nama" => "Pian", "nilai" => 88];
    $m8 = ["nim" => "008", "nama" => "maudy", "nilai" => 95];
    $m9 = ["nim" => "009", "nama" => "eko", "nilai" => 50];
    $m10 = ["nim" => "010", "nama" => "Riyan", "nilai" => 100];

    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
    $titles = ["No", "NIM", "Nama", "Nilai", "Keterangan", "Grade", "Predikat"];
    ?>
    <div class="container">
        <h1 class="text-center mt-4 mb-4">Data Nilai</h1>
        <table class="table table-bordered border-primary">
            <thead>
                <tr class="table-primary">
                    <?php
                    foreach ($titles as $title) { ?>
                        <th><?= $title ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $m) {
                    $nim = $m['nim'];
                    $nama = $m['nama'];
                    $nilai = $m['nilai'];
                    $keterangan = ($nilai >= 60) ? "Lulus" : "Coba Lagi";

                    if ($nilai >= 90 && $nilai <= 100) {
                        $grade ="A";
                    } elseif ($nilai >= 80 && $nilai < 90) {
                        $grade ="B";
                    } elseif ($nilai >= 70 && $nilai < 80) {
                        $grade ="C";
                    } elseif ($nilai >= 60 && $nilai < 70) {
                        $grade ="D";
                    } else {
                        $grade = "E";
                    }

                    switch ($grade) {
                        case 'A':
                            $predikat = "Memuaskan";
                            break;
                        
                        case 'B':
                            $predikat = "Baik";
                            break;
                        
                        case 'C':
                            $predikat = "Cukup";
                            break;
                        
                        case 'D':
                            $predikat = "Kurang";
                            break;
                        
                        default:
                            $predikat = "Buruk";
                            break;   
                    }
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php  
                $jmlhmhs = count($mahasiswa);
                $macamnilai = array_column($mahasiswa, "nilai");
                $totalnilai = array_sum($macamnilai);
                $nilaibesar = max($macamnilai);
                $nilaikecil = min($macamnilai);
                $ratarata = $totalnilai / $jmlhmhs;

                $tfoot = [
                    "Nilai Terbesar " => $nilaibesar,
                    "Nilai Terkecil " => $nilaikecil,
                    "Rata - Rata " => $ratarata,
                    "Jumlah Mahasiswa " => $jmlhmhs
                ];
     foreach ($tfoot as $key => $value) { ?>
                    <tr class="table-primary">
                        <th colspan="4"><?= $key ?></th>
                        <th colspan="3"><?= $value ?></th>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>