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
        // Storage::disk('surat_tugas')->put('surat_tugas.txt', 'hello surat');

        // $pathDefault = Storage::path('new_file.txt');
        // $pathPublic = Storage::disk('public')->path('public_file.txt');
        // $pathSuratTugas = Storage::disk('surat_tugas')->path('surat_tugas.txt');

        // ddd($pathDefault, $pathPublic, $pathSuratTugas);

        $urlDefault = Storage::url('new_file.txt');
        $urlPublic = Storage::disk('public')->url('public_file.txt');
        $urlSuratTugas = Storage::disk('surat_tugas')->url('surat_tugas.txt');

        ddd($urlDefault, $urlPublic, $urlSuratTugas);
    }
}
