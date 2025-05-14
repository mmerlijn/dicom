<?php


use mmerlijn\dicom\Nanodicom;

require __DIR__ . '/../vendor/autoload.php';

$dicom = Nanodicom::factory("OT000001.dcm", 'dumper');
$dicom->parse(array(array(0x0010, 0x0010)));
echo $dicom->dump();
echo $dicom->profiler_diff('parse')."<br>";
// Patient Name if exists
echo 'Something should show if element exists.'.$dicom->value(0x0010, 0x0010)."<br>";
// This will return the value because 'dumper' was used and loaded the dictionaries
echo 'This should be empty, no dictionaries loaded.'.$dicom->PatientName."<br>";