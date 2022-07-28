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


    public function tambah(request $request){
        $ex = explode(preg_replace("/[^0-9]/","",$request->nama),$request->nama)[1];
        $array = explode(" ", $ex);
       if (in_array("tahun", $array)) {
        $kota = explode("tahun", $ex);
       } 

       if (in_array("th", $array)) {
        $kota = explode("th", $ex);
       } 

       if (in_array("thn", $array)) {
        $kota = explode("thn", $ex);
       } 
        Usermodel::create([
            'nama' => strtoupper(explode(preg_replace("/[^0-9]/","",$request->nama),$request->nama)[0]),
            'umur' => strtoupper(preg_replace("/[^0-9]/","",$request->nama)). ' TAHUN',
            'kota' => strtoupper($kota[1])
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
	
	Usermodel::where('id',$id)->delete();

	return redirect('/');
    }
}
