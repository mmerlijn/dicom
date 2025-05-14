<?php

require __DIR__ . '/../vendor/autoload.php';

$dicom = \mmerlijn\dicom\Nanodicom::factory("OT000001.dcm");
$dicom->parse(array(array(0x0010, 0x0010)));
// Only a small subset of the dictionary entries were loaded
echo $dicom->profiler_diff('parse')."<br>";
echo 'Patient name if exists: '.$dicom->value(0x0010, 0x0010)."<br>"; // Patient Name if exists
// This will return nothing because dictionaries were not loaded
echo 'Patient name should be empty here: '.$dicom->PatientName."<br>";