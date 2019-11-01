<?php 
include 'phpqrcode/qrlib.php'; 
$text = "Shine Group"; 
QRcode::png($text); 
?> 
