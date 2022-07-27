<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usermodel;

class UserController extends Controller
{
    public function index(){
        $user = DB::table('user')->get();
        return view('user.index', compact('user'));
    }

    public function store(request $request){
        // return explode(" ",$request['umur'])[0];
        $user = [
            'nama' => strtoupper($request['nama']),
            'umur' => strtoupper(preg_replace("/[^0-9]/","",$request['umur'])). ' TAHUN',
            'kota' => strtoupper($request['kota'])
        ];

        Usermodel::create($user);

        return redirect('/');
    }

    public function destroy($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	Usermodel::where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
}
