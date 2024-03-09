<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DemoFileUploadController extends Controller
{
    public function index()
    {
        //menyimpan file ke disk local
        // Storage::put('new_file.txt', 'hello rely');

        //menyimpan file ke disk public
        // Storage::disk('public')->put('public_file.txt', 'hello public');

        //menyimpan file ke disk surat_tugas
        // Storage::disk('surat_tugas')->put('surat_tugas.txt', 'hello surat');

        //menampilkan path dari setiap disk
        // $pathDefault = Storage::path('new_file.txt');
        // $pathPublic = Storage::disk('public')->path('public_file.txt');
        // $pathSuratTugas = Storage::disk('surat_tugas')->path('surat_tugas.txt');
        // ddd($pathDefault, $pathPublic, $pathSuratTugas);

        //menampilkan url dari setiap disk
        // $urlDefault = Storage::url('new_file.txt');
        // $urlPublic = Storage::disk('public')->url('public_file.txt');
        // $urlSuratTugas = Storage::disk('surat_tugas')->url('surat_tugas.txt');
        // ddd($urlDefault, $urlPublic, $urlSuratTugas);

        //menampilkan metadata(size, dll)
        // $metaDefault = Storage::disk('local')->size('new_file.txt');
        // ddd($metaDefault);

        //mendownload file dari disk
        // return Storage::disk('surat_tugas')->download('surat_tugas.txt');

        //copy file & Move File
        Storage::disk('surat_tugas')->copy('surat_tugas.txt', 'mondok/mondok.txt');
        Storage::disk('surat_tugas')->move('surat_tugas.txt', 'mondok/surat_tugas.txt');
    }
}
