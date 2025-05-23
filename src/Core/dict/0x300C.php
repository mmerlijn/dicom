<?php
namespace mmerlijn\dicom\Core\dict;
use mmerlijn\dicom\Core\Nanodicom_Dictionary;

		// Group 0x300C
		Nanodicom_Dictionary::$dict[0x300C][0x0002] = array('SQ', ' 1', 'ReferencedRTPlanSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x0004] = array('SQ', ' 1', 'ReferencedBeamSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x0006] = array('IS', ' 1', 'ReferencedBeamNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0007] = array('IS', ' 1', 'ReferencedReferenceImageNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0008] = array('DS', ' 1', 'StartCumulativeMetersetWeight');
		Nanodicom_Dictionary::$dict[0x300C][0x0009] = array('DS', ' 1', 'EndCumulativeMetersetWeight');
		Nanodicom_Dictionary::$dict[0x300C][0x000A] = array('SQ', ' 1', 'ReferencedBrachyApplicationSetupSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x000C] = array('IS', ' 1', 'ReferencedBrachyApplicationSetupNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x000E] = array('IS', ' 1', 'ReferencedSourceNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0020] = array('SQ', ' 1', 'ReferencedFractionGroupSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x0022] = array('IS', ' 1', 'ReferencedFractionGroupNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0040] = array('SQ', ' 1', 'ReferencedVerificationImageSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x0042] = array('SQ', ' 1', 'ReferencedReferenceImageSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x0050] = array('SQ', ' 1', 'ReferencedDoseReferenceSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x0051] = array('IS', ' 1', 'ReferencedDoseReferenceNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0055] = array('SQ', ' 1', 'BrachyReferencedDoseReferenceSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x0060] = array('SQ', ' 1', 'ReferencedStructureSetSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x006A] = array('IS', ' 1', 'ReferencedPatientSetupNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0080] = array('SQ', ' 1', 'ReferencedDoseSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x00A0] = array('IS', ' 1', 'ReferencedToleranceTableNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x00B0] = array('SQ', ' 1', 'ReferencedBolusSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x00C0] = array('IS', ' 1', 'ReferencedWedgeNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x00D0] = array('IS', ' 1', 'ReferencedCompensatorNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x00E0] = array('IS', ' 1', 'ReferencedBlockNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x00F0] = array('IS', ' 1', 'ReferencedControlPointIndex');
		Nanodicom_Dictionary::$dict[0x300C][0x00F2] = array('SQ', ' 1', 'ReferencedControlPointSequence');
		Nanodicom_Dictionary::$dict[0x300C][0x00F4] = array('IS', ' 1', 'ReferencedStartControlPointIndex');
		Nanodicom_Dictionary::$dict[0x300C][0x00F6] = array('IS', ' 1', 'ReferencedStopControlPointIndex');
		Nanodicom_Dictionary::$dict[0x300C][0x0100] = array('IS', ' 1', 'ReferencedRangeShifterNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0102] = array('IS', ' 1', 'ReferencedLateralSpreadingDeviceNumber');
		Nanodicom_Dictionary::$dict[0x300C][0x0104] = array('IS', ' 1', 'ReferencedRangeModulatorNumber');
