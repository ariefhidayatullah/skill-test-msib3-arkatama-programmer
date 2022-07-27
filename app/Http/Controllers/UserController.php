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

        Usermodel::create([
            'nama' => strtoupper($request['nama']),
            'umur' => strtoupper(preg_replace("/[^0-9]/","",$request['umur'])). ' TAHUN',
            'kota' => strtoupper($request['kota'])
        ]);

        return redirect('/');
    }

    public function tambah(request $request){

        Usermodel::create([
            'nama' => strtoupper(explode(" ",$request->nama)[0]),
            'umur' => strtoupper(preg_replace("/[^0-9]/","",$request['nama'])). ' TAHUN',
            'kota' => strtoupper(explode(" ",$request->nama)[2])
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
	
	Usermodel::where('id',$id)->delete();

	return redirect('/');
    }
}
