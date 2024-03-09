<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DemoFileUploadController extends Controller
{
    public function index()
    {
        // Storage::put('new_file.txt', 'hello rely');
        // Storage::disk('public')->put('public_file.txt', 'hello public');
        Storage::disk('surat_tugas')->put('surat_tugas.txt', 'hello surat');
    }
}
