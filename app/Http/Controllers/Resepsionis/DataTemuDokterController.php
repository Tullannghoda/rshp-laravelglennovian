<?php

namespace App\Http\Controllers\Resepsionis;

use App\Http\Controllers\Controller;
use App\Models\TemuDokter; // Model yang dibuat di bawah

class DataTemuDokterController extends Controller
{
    public function index()
    {
        $temuDokters = TemuDokter::with([
            'pet:idpet,nama',
            'roleUser:idrole_user,iduser',
            'roleUser.user:iduser,nama'
        ])->get();

         return view('resepsionis.temu-dokter.index', compact('temuDokters'));
    }
}

