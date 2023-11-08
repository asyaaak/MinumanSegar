<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "data_sekolah";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak bisa terkoneksi ke database");
}
$nik = "";
$nama = "";
$alamat = "";
$mapel = "";
$sukses = "";
$error = "";

if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['mapel'];

    if ($nik && $nama && $alamat && $jurusan) {
        $sql1 = "insert into guru (nik,nama,alamat,mapel) values('$nik','$nama','$alamat','$mapel')";
        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Berhasil memasukkan data baru";
        } else {
            $error = "Gagal memasukkan data";
        }
    } else {
        $error = "Silahkan masukan semua data";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 20px
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                    <?php
                }
                ?>

                <?php
                if ($sukses) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $sukses ?>
                    </div>
                    <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nik" class="form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="<?php echo $alamat ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="mapel" class="form-label">Mapel</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="mapel" id="mapel">
                                <option value="">- Pilihlah Mapel Anda - </option>
                                <option value="rpl" <?php if ($mapel == "rpl")
                                    echo "selected" ?>>Rekayasa Perangkat Lunak
                                    </option>
                                    <option value="tkj" <?php if ($mapel == "tkj")
                                    echo "selected" ?>>Teknik Komputer dan
                                        Jaringan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header text-white bg-secondary">
                    Data Guru
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </body>

    </html>