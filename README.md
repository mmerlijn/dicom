# Install

```composer require mmerlijn/dicom```

# Usage

```php
$filename = '_.dcm';
$dicom = \mmerlijn\dicom\Nanodicom::factory($filename);

$dicom->parse(array(array(0x0010, 0x0010)));
// Only a small subset of the dictionary entries were loaded
echo $dicom->profiler_diff('parse')."<br>";

echo 'Patient name if exists: '.$dicom->value(0x0010, 0x0010)."<br>"; // Patient Name if exists

// This will return nothing because dictionaries were not loaded
echo 'Patient name should be empty here: '.$dicom->PatientName."<br>";

```

# Store jpg file
```php
use mmerlijn\dicom\Nanodicom;

$filename = '_.dcm';

$dicom  = Nanodicom::factory($filename, 'Pixeler');
if ( ! file_exists($filename.'.0.jpg'))
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
```
