<?php
namespace mmerlijn\dicom\Core\dict;
// Group 0x003A
use mmerlijn\dicom\Core\Nanodicom_Dictionary;

Nanodicom_Dictionary::$dict[0x003A][0x0004] = array('CS', ' 1', 'WaveformOriginality');
Nanodicom_Dictionary::$dict[0x003A][0x0005] = array('US', ' 1', 'NumberOfWaveformChannels');
Nanodicom_Dictionary::$dict[0x003A][0x0010] = array('UL', ' 1', 'NumberOfWaveformSamples');
Nanodicom_Dictionary::$dict[0x003A][0x001A] = array('DS', ' 1', 'SamplingFrequency');
Nanodicom_Dictionary::$dict[0x003A][0x0020] = array('SH', ' 1', 'MultiplexGroupLabel');
Nanodicom_Dictionary::$dict[0x003A][0x0200] = array('SQ', ' 1', 'ChannelDefinitionSequence');
Nanodicom_Dictionary::$dict[0x003A][0x0202] = array('IS', ' 1', 'WaveformChannelNumber');
Nanodicom_Dictionary::$dict[0x003A][0x0203] = array('SH', ' 1', 'ChannelLabel');
Nanodicom_Dictionary::$dict[0x003A][0x0205] = array('CS', ' 1-n', 'ChannelStatus');
Nanodicom_Dictionary::$dict[0x003A][0x0208] = array('SQ', ' 1', 'ChannelSourceSequence');
Nanodicom_Dictionary::$dict[0x003A][0x0209] = array('SQ', ' 1', 'ChannelSourceModifiersSequence');
Nanodicom_Dictionary::$dict[0x003A][0x020A] = array('SQ', ' 1', 'SourceWaveformSequence');
Nanodicom_Dictionary::$dict[0x003A][0x020C] = array('LO', ' 1', 'ChannelDerivationDescription');
Nanodicom_Dictionary::$dict[0x003A][0x0210] = array('DS', ' 1', 'ChannelSensitivity');
Nanodicom_Dictionary::$dict[0x003A][0x0211] = array('SQ', ' 1', 'ChannelSensitivityUnitsSequence');
Nanodicom_Dictionary::$dict[0x003A][0x0212] = array('DS', ' 1', 'ChannelSensitivityCorrectionFactor');
Nanodicom_Dictionary::$dict[0x003A][0x0213] = array('DS', ' 1', 'ChannelBaseline');
Nanodicom_Dictionary::$dict[0x003A][0x0214] = array('DS', ' 1', 'ChannelTimeSkew');
Nanodicom_Dictionary::$dict[0x003A][0x0215] = array('DS', ' 1', 'ChannelSampleSkew');
Nanodicom_Dictionary::$dict[0x003A][0x0218] = array('DS', ' 1', 'ChannelOffset');
Nanodicom_Dictionary::$dict[0x003A][0x021A] = array('US', ' 1', 'WaveformBitsStored');
Nanodicom_Dictionary::$dict[0x003A][0x0220] = array('DS', ' 1', 'FilterLowFrequency');
Nanodicom_Dictionary::$dict[0x003A][0x0221] = array('DS', ' 1', 'FilterHighFrequency');
Nanodicom_Dictionary::$dict[0x003A][0x0222] = array('DS', ' 1', 'NotchFilterFrequency');
Nanodicom_Dictionary::$dict[0x003A][0x0223] = array('DS', ' 1', 'NotchFilterBandwidth');
Nanodicom_Dictionary::$dict[0x003A][0x0230] = array('FL', ' 1', 'WaveformDataDisplayScale');
Nanodicom_Dictionary::$dict[0x003A][0x0231] = array('US', ' 3', 'WaveformDisplayBackgroundCIELabValue');
Nanodicom_Dictionary::$dict[0x003A][0x0240] = array('SQ', ' 1', 'WaveformPresentationGroupSequence');
Nanodicom_Dictionary::$dict[0x003A][0x0241] = array('US', ' 1', 'PresentationGroupNumber');
Nanodicom_Dictionary::$dict[0x003A][0x0242] = array('SQ', ' 1', 'ChannelDisplaySequence');
Nanodicom_Dictionary::$dict[0x003A][0x0244] = array('US', ' 3', 'ChannelRecommendedDisplayCIELabValue');
Nanodicom_Dictionary::$dict[0x003A][0x0245] = array('FL', ' 1', 'ChannelPosition');
Nanodicom_Dictionary::$dict[0x003A][0x0246] = array('CS', ' 1', 'DisplayShadingFlag');
Nanodicom_Dictionary::$dict[0x003A][0x0247] = array('FL', ' 1', 'FractionalChannelDisplayScale');
Nanodicom_Dictionary::$dict[0x003A][0x0248] = array('FL', ' 1', 'AbsoluteChannelDisplayScale');
Nanodicom_Dictionary::$dict[0x003A][0x0300] = array('SQ', ' 1', 'MultiplexedAudioChannelsDescriptionCodeSequence');
Nanodicom_Dictionary::$dict[0x003A][0x0301] = array('IS', ' 1', 'ChannelIdentificationCode');
Nanodicom_Dictionary::$dict[0x003A][0x0302] = array('CS', ' 1', 'ChannelMode');
