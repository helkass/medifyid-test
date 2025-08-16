<?php

namespace App\Helper;

class FileUploadHelper
{
    public static function upload($request, string $path = 'unknown', string $namingFile = 'unknown'): string|null|bool
    {
        $file = $request->file('image');
        // Buat nama file baru
        $timestamp = now()->timestamp; // Dapatkan timestamp
        $username = preg_replace('/[^a-zA-Z0-9]/', '_', $namingFile); // Ganti karakter spesial dengan underscore
        $extension = $file->getClientOriginalExtension(); // Dapatkan ekstensi file
        $fileName = "{$timestamp}_{$username}_image.{$extension}";

        // Simpan file dengan nama baru
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }
}
