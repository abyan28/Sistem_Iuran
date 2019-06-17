<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penghuni;

class PenghuniController extends Controller
{
    function index()
    {
        $data['list_penghuni'] = Penghuni::get();
        return view('penghuni', $data);
    }
}
