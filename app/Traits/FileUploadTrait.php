<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

trait FileUploadTrait
{
    public function uploadFile(UploadedFile $file, ?string $oldPath = null, ?string $path = 'uploads'): ?string
    {
        if (!$file->isValid()) {
            return null;
        }

        $ignorePath = ['/default/avatar.png', '/defaults/banner.png', '/defaults/shop.png'];

        // Delete old file
        if ($oldPath && File::exists(public_path($oldPath)) && !in_array($oldPath, $ignorePath)) {
            File::delete(public_path($oldPath));
        }

        // Create folder if not exists
        $folderPath = public_path($path);
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        // Generate filename
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Move file to public folder
        $file->move($folderPath, $filename);

        // Return path
        return $path . '/' . $filename;
    }
}
