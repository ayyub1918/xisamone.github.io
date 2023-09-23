<?php
$koneksi = mysqli_connect("localhost", "root", "", "Register");

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$submit = $_POST['submit'];

$query = "INSERT INTO registrasi VALUES('$nama','$jurusan','$jenis_kelamin','$submit')";

mysqli_query($koneksi, $query);
?>
