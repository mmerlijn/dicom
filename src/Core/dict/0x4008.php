<?php
namespace mmerlijn\dicom\Core\dict;
use mmerlijn\dicom\Core\Nanodicom_Dictionary;

		// Group 0x4008
		Nanodicom_Dictionary::$dict[0x4008][0x0040] = array('SH', ' 1 ', 'ResultsID', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0042] = array('LO', ' 1 ', 'ResultsIDIssuer', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0050] = array('SQ', ' 1 ', 'ReferencedInterpretationSequence', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0100] = array('DA', ' 1 ', 'InterpretationRecordedDate', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0101] = array('TM', ' 1 ', 'InterpretationRecordedTime', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0102] = array('PN', ' 1 ', 'InterpretationRecorder', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0103] = array('LO', ' 1 ', 'ReferenceToRecordedSound', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0108] = array('DA', ' 1 ', 'InterpretationTranscriptionDate', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0109] = array('TM', ' 1 ', 'InterpretationTranscriptionTime', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x010A] = array('PN', ' 1 ', 'InterpretationTranscriber', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x010B] = array('ST', ' 1 ', 'InterpretationText', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x010C] = array('PN', ' 1 ', 'InterpretationAuthor', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0111] = array('SQ', ' 1 ', 'InterpretationApproverSequence', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0112] = array('DA', ' 1 ', 'InterpretationApprovalDate', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0113] = array('TM', ' 1 ', 'InterpretationApprovalTime', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0114] = array('PN', ' 1 ', 'PhysicianApprovingInterpretation', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0115] = array('LT', ' 1 ', 'InterpretationDiagnosisDescription', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0117] = array('SQ', ' 1 ', 'InterpretationDiagnosisCodeSequence', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0118] = array('SQ', ' 1 ', 'ResultsDistributionListSequence', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0119] = array('PN', ' 1 ', 'DistributionName', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x011A] = array('LO', ' 1 ', 'DistributionAddress', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0200] = array('SH', ' 1 ', 'InterpretationID', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0202] = array('LO', ' 1 ', 'InterpretationIDIssuer', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0210] = array('CS', ' 1 ', 'InterpretationTypeID', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0212] = array('CS', ' 1 ', 'InterpretationStatusID', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x0300] = array('ST', ' 1 ', 'Impressions', 'RET');
		Nanodicom_Dictionary::$dict[0x4008][0x4000] = array('ST', ' 1 ', 'ResultsComments', 'RET');
