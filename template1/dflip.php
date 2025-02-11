<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_clean(); // Hapus output buffer biar gak ada masalah di header
flush();    // Pastikan gak ada output sebelum header

// Tangkap nama file dari URL
$fileName = basename($_SERVER["REQUEST_URI"]);

// Folder PDF
$pdfDir = __DIR__ . "/assets/pdf/";
$filePath = $pdfDir . $fileName;

// Cek file ada atau enggak
if (!file_exists($filePath)) {
    header("HTTP/1.1 404 Not Found");
    die("File PDF tidak ditemukan!");
}

// Paksa browser buat buka PDF langsung
header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"" . basename($filePath) . "\"");
header("Content-Length: " . filesize($filePath));
header("Accept-Ranges: bytes");
header("X-Content-Type-Options: nosniff"); // Mencegah browser override header

// Kirim file
readfile($filePath);
exit;
?>
