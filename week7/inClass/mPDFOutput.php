<?php

// Sends output inline to browser
include('mPDF/Mpdf.php');

$mpdf = new mPDF();

$mpdf->WriteHTML('Hello World');

$mpdf->Output();

?>