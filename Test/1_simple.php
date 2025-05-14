<?php

require __DIR__ . '/../vendor/autoload.php';

$dicom = \mmerlijn\dicom\Nanodicom::factory("OT000001.dcm");
echo $dicom->parse()->profiler_diff('parse')."\n";