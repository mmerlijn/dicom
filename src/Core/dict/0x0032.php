<?php
namespace mmerlijn\dicom\Core\dict;
		// Group 0x0032
        use mmerlijn\dicom\Core\Nanodicom_Dictionary;

        Nanodicom_Dictionary::$dict[0x0032][0x0000] = array('UL', '1', 'StudyGroupLength', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x000A] = array('CS', ' 1 ', 'StudyStatusID', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x000C] = array('CS', ' 1 ', 'StudyPriorityID', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x0012] = array('LO', ' 1 ', 'StudyIDIssuer', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x0032] = array('DA', ' 1 ', 'StudyVerifiedDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x0033] = array('TM', ' 1 ', 'StudyVerifiedTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x0034] = array('DA', ' 1 ', 'StudyReadDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x0035] = array('TM', ' 1 ', 'StudyReadTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1000] = array('DA', ' 1 ', 'ScheduledStudyStartDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1001] = array('TM', ' 1 ', 'ScheduledStudyStartTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1010] = array('DA', ' 1 ', 'ScheduledStudyStopDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1011] = array('TM', ' 1 ', 'ScheduledStudyStopTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1020] = array('LO', ' 1 ', 'ScheduledStudyLocation', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1021] = array('AE', ' 1-n ', 'ScheduledStudyLocationAEtitle', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1030] = array('LO', ' 1 ', 'ReasonForStudy', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1031] = array('SQ', ' 1', 'RequestingPhysicianIdentificationSequence');
		Nanodicom_Dictionary::$dict[0x0032][0x1032] = array('PN', ' 1', 'RequestingPhysician');
		Nanodicom_Dictionary::$dict[0x0032][0x1033] = array('LO', ' 1', 'RequestingService');
		Nanodicom_Dictionary::$dict[0x0032][0x1034] = array('SQ', ' 1', 'RequestingServiceCodeSequence');
		Nanodicom_Dictionary::$dict[0x0032][0x1040] = array('DA', ' 1 ', 'StudyArrivalDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1041] = array('TM', ' 1 ', 'StudyArrivalTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1050] = array('DA', ' 1 ', 'StudyCompletionDate', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1051] = array('TM', ' 1 ', 'StudyCompletionTime', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1055] = array('CS', ' 1 ', 'StudyComponentStatusID', 'RET');
		Nanodicom_Dictionary::$dict[0x0032][0x1060] = array('LO', ' 1', 'RequestedProcedureDescription');
		Nanodicom_Dictionary::$dict[0x0032][0x1064] = array('SQ', ' 1', 'RequestedProcedureCodeSequence');
		Nanodicom_Dictionary::$dict[0x0032][0x1070] = array('LO', ' 1', 'RequestedContrastAgent');
		Nanodicom_Dictionary::$dict[0x0032][0x4000] = array('LT', ' 1 ', 'StudyComments', 'RET');
