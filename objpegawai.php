<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <?php 
    require "Pegawai.php"; 
    $p1 = ["nip" => "1804", "nama" => "Riyan", "jabatan" => "Manager", "agama" => "Islam", "status" => "Belum Menikah" ];
    $p2 = ["nip" => "1603", "nama" => "Agil", "jabatan" => "Asisten", "agama" => "Islam", "status" => "Menikah" ];
    $p3 = ["nip" => "1202", "nama" => "Adit", "jabatan" => "KaBag", "agama" => "Islam", "status" => "Belum Menikah" ];
    $p4 = ["nip" => "1208", "nama" => "Rama", "jabatan" => "Staff", "agama" => "Islam", "status" => "Belum Menikah" ];
    $p5 = ["nip" => "0401", "nama" => "Zul", "jabatan" => "Staff", "agama" => "Islam", "status" => "Menikah" ];

    $data = [$p1, $p2, $p3, $p4, $p5]
    ?>

    <div class="container">
        <h1 class="text-center mt-4 mb-6">Data Pegawai</h1>
        <h3 class="text-center text-warning">UD. Berkah Alam</h3>
            </hr>
            <div class="col">
                <?php 
                    foreach ($data as $pg) {
                        $nip = $pg['nip'];
                        $nama = $pg['nama'];
                        $jabatan = $pg['jabatan'];
                        $agama = $pg['agama'];
                        $status = $pg['status'];
                        $pegawai = new Pegawai($nip, $nama, $jabatan, $agama, $status);
                        $pegawai->mencetak();
                    }
                    echo 'Jumlah Pegawai = ' .Pegawai::$jml;
                    ?>
                    
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>