<?php
namespace mmerlijn\dicom\Core\dict;
use mmerlijn\dicom\Core\Nanodicom_Dictionary;

		// Group 0x2030
		Nanodicom_Dictionary::$dict[0x2030][0x0010] = array('US', ' 1', 'AnnotationPosition');
		Nanodicom_Dictionary::$dict[0x2030][0x0020] = array('LO', ' 1', 'TextString');
