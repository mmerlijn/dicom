<?php
namespace mmerlijn\dicom\Core\dict;
use mmerlijn\dicom\Core\Nanodicom_Dictionary;

Nanodicom_Dictionary::$dict[0x7FE0][0x0000] = array('UL', '1', 'PixelDataGroupLength');
		Nanodicom_Dictionary::$dict[0x7FE0][0x0010] = array('OX', '1', 'PixelData');/*PIXELDATA*/
		Nanodicom_Dictionary::$dict[0x7FE0][0x0020] = array('OW', ' 1 ', 'CoefficientsSDVN', 'RET');
		Nanodicom_Dictionary::$dict[0x7FE0][0x0030] = array('OW', ' 1 ', 'CoefficientsSDHN', 'RET');
		Nanodicom_Dictionary::$dict[0x7FE0][0x0040] = array('OW', ' 1 ', 'CoefficientsSDDN', 'RET');
