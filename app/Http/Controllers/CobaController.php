<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CobaController extends Controller
{
    public function index()
    {
        return 'test berhasil'
    }

    public function urutan($ke)
    {
        return view('urutan', ['ke' => $ke]);
    }
}
