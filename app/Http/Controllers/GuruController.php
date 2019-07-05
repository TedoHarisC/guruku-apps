<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\BukaKelas;
use App\Jadwal;
use Illuminate\Support\Facades\Auth;
use DB;
// use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Image;
use File;

class GuruController extends Controller
{
    //
    public function index()
    {
        $kelas = BukaKelas::all();

        $jadwals = DB::table('jadwals')
        ->join('buka_kelas', 'jadwals.bukakelas_id', '=', 'buka_kelas.id')
        ->get();

        // dd($kelas);


        return view('guru.dashboard')->with('kelas',$kelas)->with('jadwals',$jadwals);

    }

    public function profile()
    {
        $user_id = Auth::id();

        $guru = DB::table('gurus')
        ->join('users', 'gurus.user_id', '=', 'users.id')
        //->orderBy('carts.created_at', 'desc')
        ->where('users.id', '=', $user_id)
        ->get();    

        // dd($guru);
        
        return view('guru.profile')->with('guru',$guru);

    }

    public function bukaKelas()
    {
        return view('guru.formBukaKelas');
    }

    public function postBukaKelas(Request $request)
    {
        $user_id = Auth::id();


        $bukakelas = new BukaKelas;
        $bukakelas -> id_user_guru = $user_id;
        $bukakelas -> tingkat_pendidikan = $request -> tingkat_pendidikan;
        $bukakelas -> mata_pelajaran = $request -> mata_pelajaran;
        $bukakelas -> biaya = $request -> biaya;

        $bukakelas ->save();
        foreach($request->hari as $key => $v){

            $data = array('bukakelas_id' => $bukakelas->id,
                            'hari' => $v,
                            'jam' => $request->jam[$key]);
            Jadwal::insert($data);

        }
        
        return redirect()->route('gurudashboard');
    }

    public function detail()
    {
        return view('guru.detailPesan');

    }

}
