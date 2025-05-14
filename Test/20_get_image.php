<?php
use mmerlijn\dicom\Nanodicom;
require __DIR__ . '/../vendor/autoload.php';



$dicom  = Nanodicom::factory("OT000001.dcm", 'Pixeler');
if ( ! file_exists('dump.0.jpg'))
{
    try {

        $images = $dicom->get_images();
    }catch (Exception $e) {
        echo "Error: ".$e->getMessage()."\n";
        exit;
    }

    // If using another library, for example, imagemagick, the following should be done:
    // $images = $dicom->set_driver('imagick')->get_images();

    if ($images !== FALSE)
    {
        foreach ($images as $index => $image)
        {
            // Defaults to jpg
            $dicom->write_image($image, 'dump.0.jpg');
            // To write another format, pass the format in second parameter.
            // This will write a png image instead
            // $test->write_image($image, $dir.$file.'.'.$index, 'png');
        }
    }
    else
    {
        echo "There are no DICOM images or transfer syntax not supported yet.\n";
    }
    $images = NULL;
}
else
{
    echo "Image already exists\n";
}
unset($dicom);