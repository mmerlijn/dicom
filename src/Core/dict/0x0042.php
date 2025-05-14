<?php
namespace mmerlijn\dicom\Core\dict;
use mmerlijn\dicom\Core\Nanodicom_Dictionary;

		// Group 0x0042
		Nanodicom_Dictionary::$dict[0x0042][0x0010] = array('ST', ' 1', 'DocumentTitle');
		Nanodicom_Dictionary::$dict[0x0042][0x0011] = array('OB', ' 1', 'EncapsulatedDocument');
		Nanodicom_Dictionary::$dict[0x0042][0x0012] = array('LO', ' 1', 'MIMETypeOfEncapsulatedDocument');
		Nanodicom_Dictionary::$dict[0x0042][0x0013] = array('SQ', ' 1', 'SourceInstanceSequence');
		Nanodicom_Dictionary::$dict[0x0042][0x0014] = array('LO', ' 1-n', 'ListOfMIMETypes');
