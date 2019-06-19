<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penghuni;
use Illuminate\Support\Facades\DB;

class PenghuniController extends Controller
{
    function index()
    {
        $data['list_penghuni'] = Penghuni::paginate(5);
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
    
    public function formaddpenghuni(Request $request)
	{
		return view('penghuni_add');
	}
	public function addpenghuni(Request $request)
	{
		$messages = [
			'required' => ':attribute Wajib Diisi!',
			'min' => ':attribute harus diisi minimal :min karakter!',
			'max' => ':attribute harus diisi maksimal :max karakter!',
		];

		$this->validate($request,[
			'id' => 'required|min:4',
			'nama' => 'required|min:5|max:20',
			'tgllahir' => 'required',
			'jk' => 'required',
			'kamar'=> 'required|numeric',
			'nrp' => 'required|numeric',
			'alamat' => 'required',
			'nomortelepon' => array('required', 'regex:/(^\d{1,15}$)/u')
		], $messages);

		$qstatus = Penghuni::insert([
            'Penghuni_ID' => $request->id,
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
    
    public function deletepenghuni(Request $request)
	{
        $idpenghuni = $request->query('id');
		$qstatus = Penghuni::where('Penghuni_ID', $idpenghuni)->delete();
		return redirect()->action('PenghuniController@index');
	}

	public function caripenghuni(Request $request)
	{
		$cari = $request->cari;

		$data['list_penghuni'] = Penghuni::where('Penghuni_Nama', 'like', "%".$cari."%")->paginate(5);

		return view('penghuni', $data);
	}
}
