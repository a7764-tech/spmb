<?php

include 'koneksi.php';

$jenis = $_POST['jenis_pendaftaran'];
$jalur = $_POST['jalur_pendaftaran'];
$jurusan = $_POST['jurusan'];
$nama = $_POST['nama_lengkap'];
$NISN = $_POST['NISN'];
$jk = $_POST['jenis_kelamin'];
$tempat = $_POST['tempat_lahir'];
$tgl = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$kabupaten = $_POST['kabupaten'];
$hp = $_POST['no_hp'];
$wn = $_POST['kewarganegaraan'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "upload/" . $foto);

$sql = "INSERT INTO pendaftaran
(
jenis_pendaftaran,
jalur_pendaftaran,
jurusan,
nama_lengkap,
NISN,
jenis_kelamin,
tempat_lahir,
tanggal_lahir,
agama,
alamat,
kabupaten,
no_hp,
kewarganegaraan,
foto
)

VALUES
(
'$jenis',
'$jalur',
'$jurusan',
'$nama',
'$NISN',
'$jk',
'$tempat',
'$tgl',
'$agama',
'$alamat',
'$kabupaten',
'$hp',
'$wn',
'$foto'
)";

mysqli_query($conn, $sql);

echo "
<script>
alert('Pendaftaran berhasil');
window.location='try1.html';
</script>
";
?>

