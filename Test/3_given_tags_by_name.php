<?php

require __DIR__ . '/../vendor/autoload.php';

$dicom = \mmerlijn\dicom\Nanodicom::factory("OT000001.dcm");
$dicom->parse(array('PatientName'));
echo $dicom->profiler_diff('parse')."<br>";
echo 'Patient name if exists: '.$dicom->value(0x0010, 0x0010)."<br>"; // Patient Name if exists
// Or
echo 'Patient name if exists: '.$dicom->PatientName."<br>"; // Patient Name if exists