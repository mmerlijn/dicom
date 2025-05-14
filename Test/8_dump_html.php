<?php
use mmerlijn\dicom\Nanodicom;

require __DIR__ . '/../vendor/autoload.php';

$dicom = Nanodicom::factory("OT000001.dcm", 'dumper');


echo $dicom->parse()->dump('html');
echo $dicom->profiler_diff('parse').' '.$dicom->profiler_diff('dump')."\n";