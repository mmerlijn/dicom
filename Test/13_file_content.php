<?php


use mmerlijn\dicom\Nanodicom;
require __DIR__ . '/../vendor/autoload.php';


$contents = file_get_contents("OT000001.dcm");
$dicom = Nanodicom::factory($contents, 'dumper', 'blob');
echo $dicom->dump();