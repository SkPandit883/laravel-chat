<?php

namespace App\Library;

class FileHandler
{

    public static function uploadFile($path, $file)
    {
        $fileName = time() . $file->getClientOriginalName();
        $file->move(public_path() . $path, $fileName);
        return $fileName;
    }
    public static function unlink($file)
    {
        $file = public_path() . parse_url($file)['path'];
        if (file_exists($file)) {
            unlink($file);
        }
        return true;
    }
}
