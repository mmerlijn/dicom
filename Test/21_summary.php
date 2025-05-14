<?php
use mmerlijn\dicom\Nanodicom;
require __DIR__ . '/../vendor/autoload.php';


$dicom  = Nanodicom::factory("OT000001.dcm");
echo "<pre>";
echo $dicom->summary();
echo "</pre>";
unset($dicom);