<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penghuni;
use Illuminate\Support\Facades\DB;

class PenghuniController extends Controller
{
    function index()
    {
        $data['list_penghuni'] = Penghuni::get();
        return view('penghuni', $data);
    }

    public function editpenghuni(Request $request)
	{
		$qstatus = Penghuni::where('Penghuni_ID', $request->id)->update([
            'Penghuni_Nama' => $request->nama,
			'Penghuni_Tgllahir' => $request->tgllahir,
			'Penghuni_JK' => $request->jk,
			'Penghuni_Kamar' => $request->kamar,
			'Penghuni_NRP' => $request->nrp,
			'Penghuni_Alamat' => $request->alamat,
			'Penghuni_NoTelp' => $request->nomortelepon
        ]);
        return redirect()->action('PenghuniController@index');
	}
	public function formeditpenghuni(Request $request)
	{
        $idpenghuni = $request->query('id');
		$data['list_penghuni'] = Penghuni::where('Penghuni_ID', $idpenghuni)->get();
		return view('penghuni_edit', $data);
	}
}
