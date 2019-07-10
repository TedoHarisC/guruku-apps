<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\BukaKelas;
use App\Jadwal;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
// use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Image;
use File;

class GuruController extends Controller
{
    protected $request;

    public function __construct(Request $request){   
        $this->request = $request;
    }
    //
    public function index()
    {
        $user_id = Auth::id();
        $kelas = BukaKelas::all();

        $jadwals = DB::table('jadwals')
        ->join('buka_kelas', 'jadwals.bukakelas_id', '=', 'buka_kelas.id')
        ->get();

        $guru = DB::table('users')
        ->join('gurus', 'users.id', '=','gurus.user_id')
        ->where('users.id', '=', $user_id)
        ->first();  

        // dd($guru);

        return view('guru.dashboard')->with('kelas',$kelas)->with('jadwals',$jadwals)->with('guru',$guru);

    }

    public function profile()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);

        $guru = DB::table('users')
        ->join('gurus', 'users.id', '=','gurus.user_id')
        ->where('users.id', '=', $user_id)
        ->first();    

        // dd($guru);
        
        return view('guru.profile')->with('guru',$guru)->with('user',$user);

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
        $bukakelas -> kelas = $request -> kelas_pendidikan;
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

    public function postProfiles(Request $request){

        $user_id = Auth::id();

        // update name field on users table
        $user = User::find($user_id);
        $user -> name = $request -> name;
        $user -> save();

        // retrieve guru data 
        $gurucheck = DB::table('users')
        ->join('gurus', 'users.id', '=','gurus.user_id')
        ->where('users.id', '=', $user_id)
        ->first();

        // check whenever guru data is exist
        if(empty($gurucheck)){
            // if empty create new !
            $guru = new Guru;

        }else if(!empty($gurucheck)){
            // if exist just update!
            $guru = Guru::find($gurucheck->id);

        }
        $guru -> alamat = $request -> alamat;
        $guru -> jk = $request -> jk;
        $guru -> telp = $request -> telp;
        $guru -> institusi = $request -> institusi;
        $guru -> programstudi = $request -> programstudi;
        $guru -> ipk = $request -> ipk;
        $guru -> bio = $request -> bio;
        
        $guru -> user_id = $user_id;
        if ($request->hasFile('foto')) {
			// Mengambil file yang diupload
			$uploaded_cover = $request->file('foto');
			// Mengambil extension file
			$extension = $uploaded_cover->getClientOriginalExtension();
			// Membuat nama file random dengan extension
            $filename = md5(time()) . "." . $extension;
            $filesave = 'photo/guru/profiles/'.$filename;
			// Menyimpan cover ke folder public/gambar
            // $destinationPath = storage_path() . DIRECTORY_SEPARATOR . 'storage'. DIRECTORY_SEPARATOR . 'users';
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'photo'. DIRECTORY_SEPARATOR . 'guru'. DIRECTORY_SEPARATOR . 'profiles';
            
            
			$uploaded_cover->move($destinationPath, $filename);
			// Mengisi field gambar di artikel dengan filename yang baru dibuat
			$guru-> foto = $filesave;
            $guru-> save();
		    }
        $guru -> save();

        return redirect()->route('gurudashboard');
        
    }

    public function detail()
    {
        return view('guru.detailPesan');

    }

}
