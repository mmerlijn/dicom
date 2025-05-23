<?php
namespace mmerlijn\dicom\Core\dict;
		// Group 0x0038
        use mmerlijn\dicom\Core\Nanodicom_Dictionary;

        Nanodicom_Dictionary::$dict[0x0038][0x0000] = array('UL', '1', 'VisitGroupLength', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0004] = array('SQ', ' 1', 'ReferencedPatientAliasSequence');
		Nanodicom_Dictionary::$dict[0x0038][0x0008] = array('CS', ' 1', 'VisitStatusID');
		Nanodicom_Dictionary::$dict[0x0038][0x0010] = array('LO', ' 1', 'AdmissionID');
		Nanodicom_Dictionary::$dict[0x0038][0x0011] = array('LO', ' 1 ', 'IssuerOfAdmissionID', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0014] = array('SQ', ' 1', 'IssuerOfAdmissionIDSequence');
		Nanodicom_Dictionary::$dict[0x0038][0x0016] = array('LO', ' 1', 'RouteOfAdmissions');
		Nanodicom_Dictionary::$dict[0x0038][0x001A] = array('DA', ' 1 ', 'ScheduledAdmissionDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x001B] = array('TM', ' 1 ', 'ScheduledAdmissionTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x001C] = array('DA', ' 1 ', 'ScheduledDischargeDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x001D] = array('TM', ' 1 ', 'ScheduledDischargeTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x001E] = array('LO', ' 1 ', 'ScheduledPatientInstitutionResidence', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0020] = array('DA', ' 1', 'AdmittingDate');
		Nanodicom_Dictionary::$dict[0x0038][0x0021] = array('TM', ' 1', 'AdmittingTime');
		Nanodicom_Dictionary::$dict[0x0038][0x0030] = array('DA', ' 1 ', 'DischargeDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0032] = array('TM', ' 1 ', 'DischargeTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0040] = array('LO', ' 1 ', 'DischargeDiagnosisDescription', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0044] = array('SQ', ' 1 ', 'DischargeDiagnosisCodeSequence', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0050] = array('LO', ' 1', 'SpecialNeeds');
		Nanodicom_Dictionary::$dict[0x0038][0x0060] = array('LO', ' 1', 'ServiceEpisodeID');
		Nanodicom_Dictionary::$dict[0x0038][0x0061] = array('LO', ' 1 ', 'IssuerOfServiceEpisodeID', 'RET');
		Nanodicom_Dictionary::$dict[0x0038][0x0062] = array('LO', ' 1', 'ServiceEpisodeDescription');
		Nanodicom_Dictionary::$dict[0x0038][0x0064] = array('SQ', ' 1', 'IssuerOfServiceEpisodeIDSequence');
		Nanodicom_Dictionary::$dict[0x0038][0x0100] = array('SQ', ' 1', 'PertinentDocumentsSequence');
		Nanodicom_Dictionary::$dict[0x0038][0x0300] = array('LO', ' 1', 'CurrentPatientLocation');
		Nanodicom_Dictionary::$dict[0x0038][0x0400] = array('LO', ' 1', 'PatientInstitutionResidence');
		Nanodicom_Dictionary::$dict[0x0038][0x0500] = array('LO', ' 1', 'PatientState');
		Nanodicom_Dictionary::$dict[0x0038][0x0502] = array('SQ', ' 1', 'PatientClinicalTrialParticipationSequence');
		Nanodicom_Dictionary::$dict[0x0038][0x4000] = array('LT', ' 1', 'VisitComments');
