<?php
namespace CloudStorage\FileSystem\Files\Images;

use \CloudStorage\FileSystem\Files\Contracts\ImageContract;

class Jpeg implements ImageContract
{
    function getDimension()
    {
        return "100x100";
    }
}