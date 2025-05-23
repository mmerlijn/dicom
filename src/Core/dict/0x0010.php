<?php
namespace mmerlijn\dicom\Core\dict;
		// Group 0x0010
        use mmerlijn\dicom\Core\Nanodicom_Dictionary;

        Nanodicom_Dictionary::$dict[0x0010][0x0000] = array('UL', '1', 'PatientGroupLength', 'RET');
		Nanodicom_Dictionary::$dict[0x0010][0x0010] = array('PN', ' 1', 'PatientName');
		Nanodicom_Dictionary::$dict[0x0010][0x0020] = array('LO', ' 1', 'PatientID');
		Nanodicom_Dictionary::$dict[0x0010][0x0021] = array('LO', ' 1', 'IssuerOfPatientID');
		Nanodicom_Dictionary::$dict[0x0010][0x0022] = array('CS', ' 1', 'TypeOfPatientID');
		Nanodicom_Dictionary::$dict[0x0010][0x0024] = array('SQ', ' 1', 'IssuerOfPatientIDQualifiersSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x0030] = array('DA', ' 1', 'PatientBirthDate');
		Nanodicom_Dictionary::$dict[0x0010][0x0032] = array('TM', ' 1', 'PatientBirthTime');
		Nanodicom_Dictionary::$dict[0x0010][0x0040] = array('CS', ' 1', 'PatientSex');
		Nanodicom_Dictionary::$dict[0x0010][0x0050] = array('SQ', ' 1', 'PatientInsurancePlanCodeSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x0101] = array('SQ', ' 1', 'PatientPrimaryLanguageCodeSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x0102] = array('SQ', ' 1', 'PatientPrimaryLanguageModifierCodeSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x1000] = array('LO', ' 1-n', 'OtherPatientIDs');
		Nanodicom_Dictionary::$dict[0x0010][0x1001] = array('PN', ' 1-n', 'OtherPatientNames');
		Nanodicom_Dictionary::$dict[0x0010][0x1002] = array('SQ', ' 1', 'OtherPatientIDsSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x1005] = array('PN', ' 1', 'PatientBirthName');
		Nanodicom_Dictionary::$dict[0x0010][0x1010] = array('AS', ' 1', 'PatientAge');
		Nanodicom_Dictionary::$dict[0x0010][0x1020] = array('DS', ' 1', 'PatientSize');
		Nanodicom_Dictionary::$dict[0x0010][0x1030] = array('DS', ' 1', 'PatientWeight');
		Nanodicom_Dictionary::$dict[0x0010][0x1040] = array('LO', ' 1', 'PatientAddress');
		Nanodicom_Dictionary::$dict[0x0010][0x1050] = array('LO', ' 1-n ', 'InsurancePlanIdentification', 'RET');
		Nanodicom_Dictionary::$dict[0x0010][0x1060] = array('PN', ' 1', 'PatientMotherBirthName');
		Nanodicom_Dictionary::$dict[0x0010][0x1080] = array('LO', ' 1', 'MilitaryRank');
		Nanodicom_Dictionary::$dict[0x0010][0x1081] = array('LO', ' 1', 'BranchOfService');
		Nanodicom_Dictionary::$dict[0x0010][0x1090] = array('LO', ' 1', 'MedicalRecordLocator');
		Nanodicom_Dictionary::$dict[0x0010][0x2000] = array('LO', ' 1-n', 'MedicalAlerts');
		Nanodicom_Dictionary::$dict[0x0010][0x2110] = array('LO', ' 1-n', 'Allergies');
		Nanodicom_Dictionary::$dict[0x0010][0x2150] = array('LO', ' 1', 'CountryOfResidence');
		Nanodicom_Dictionary::$dict[0x0010][0x2152] = array('LO', ' 1', 'RegionOfResidence');
		Nanodicom_Dictionary::$dict[0x0010][0x2154] = array('SH', ' 1-n', 'PatientTelephoneNumbers');
		Nanodicom_Dictionary::$dict[0x0010][0x2160] = array('SH', ' 1', 'EthnicGroup');
		Nanodicom_Dictionary::$dict[0x0010][0x2180] = array('SH', ' 1', 'Occupation');
		Nanodicom_Dictionary::$dict[0x0010][0x21A0] = array('CS', ' 1', 'SmokingStatus');
		Nanodicom_Dictionary::$dict[0x0010][0x21B0] = array('LT', ' 1', 'AdditionalPatientHistory');
		Nanodicom_Dictionary::$dict[0x0010][0x21C0] = array('US', ' 1', 'PregnancyStatus');
		Nanodicom_Dictionary::$dict[0x0010][0x21D0] = array('DA', ' 1', 'LastMenstrualDate');
		Nanodicom_Dictionary::$dict[0x0010][0x21F0] = array('LO', ' 1', 'PatientReligiousPreference');
		Nanodicom_Dictionary::$dict[0x0010][0x2201] = array('LO', ' 1', 'PatientSpeciesDescription');
		Nanodicom_Dictionary::$dict[0x0010][0x2202] = array('SQ', ' 1', 'PatientSpeciesCodeSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x2203] = array('CS', ' 1', 'PatientSexNeutered');
		Nanodicom_Dictionary::$dict[0x0010][0x2210] = array('CS', ' 1', 'AnatomicalOrientationType');
		Nanodicom_Dictionary::$dict[0x0010][0x2292] = array('LO', ' 1', 'PatientBreedDescription');
		Nanodicom_Dictionary::$dict[0x0010][0x2293] = array('SQ', ' 1', 'PatientBreedCodeSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x2294] = array('SQ', ' 1', 'BreedRegistrationSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x2295] = array('LO', ' 1', 'BreedRegistrationNumber');
		Nanodicom_Dictionary::$dict[0x0010][0x2296] = array('SQ', ' 1', 'BreedRegistryCodeSequence');
		Nanodicom_Dictionary::$dict[0x0010][0x2297] = array('PN', ' 1', 'ResponsiblePerson');
		Nanodicom_Dictionary::$dict[0x0010][0x2298] = array('CS', ' 1', 'ResponsiblePersonRole');
		Nanodicom_Dictionary::$dict[0x0010][0x2299] = array('LO', ' 1', 'ResponsibleOrganization');
		Nanodicom_Dictionary::$dict[0x0010][0x4000] = array('LT', ' 1', 'PatientComments');
		Nanodicom_Dictionary::$dict[0x0010][0x9431] = array('FL', ' 1', 'ExaminedBodyThickness');
