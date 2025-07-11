<?php
$conn = mysqli_connect("localhost", "root", "", "demos_db");

if (!$conn) {
    error_log("Koneksi database gagal: " . mysqli_connect_error());
    die("Maaf, sistem sedang bermasalah.");
}
