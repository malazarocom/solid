<?php

namespace Malazaro\Solid\InterfaceSegregation;

use Malazaro\Solid\InterfaceSegregation\Fixed\CloudStorageProvider;

class Dropbox implements CloudStorageProvider
{
    public function getName()
    {
        return 'Dropbox';
    }

    public function storeFile($fileName)
    {
        return "Storing file {$fileName}";
    }

    public function getFile($filePath)
    {
        return "File {$filePath}";
    }
}
