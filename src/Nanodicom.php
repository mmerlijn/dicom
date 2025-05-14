<?php

namespace mmerlijn\dicom;

/**
 * abstract Nanodicom class.
 *
 * All tools extend this class. Simple wrapper for Core class.
 * @package    Nanodicom
 * @category   Base
 * @author     Nano Documet <nanodocumet@gmail.com>
 * @version       1.3.1
 * @copyright  (c) 2010-2011
 * @license    http://www.opensource.org/licenses/mit-license.php MIT-license
 */
abstract class Nanodicom extends Nanodicom_Core
{
}


if (!function_exists('Nanodicom')) {
    function Nanodicom()
    {
        return app(\mmerlijn\dicom\Nanodicom::class);
    }
}
