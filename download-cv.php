<?php
$cvFilePath = 'img/pdf_20230801_083901_0000.pdf'; // Ganti dengan path yang sesuai ke file CV Anda
$cvFileName = 'my_cv.pdf';

if (file_exists($cvFilePath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename=' . $cvFileName);
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($cvFilePath));
    readfile($cvFilePath);
    exit;
} else {
    echo "File CV tidak ditemukan.";
}
?>
