<?php

namespace Malazaro\Solid\InterfaceSegregation\Fixed;

interface CloudStorageProvider
{
    public function storeFile($fileName);
    public function getFile($filePath);
}
