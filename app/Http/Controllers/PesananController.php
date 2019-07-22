<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Jadwal;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;

use DB;

class PesananController extends Controller
{
    protected $request;

    public function __construct(Request $request){   
        $this->request = $request;

        // Set midtrans configuration
        // Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
        Veritrans_Config::$serverKey = "Mid-server-dslVc1bnFcCXPYP8w6ahCxL7";
        Veritrans_Config::$isProduction = true;
        // Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        // Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
        // Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
        Veritrans_Config::$isSanitized = true;
        Veritrans_Config::$is3ds = true;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_id = Auth::id();

        $s = substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvyxyz',5)),0,5);
        $awal = strtoupper(substr($request->matapelajaran,0,3));
        $nomoriv = $awal.date('ymdHis');

        // dd($nomoriv);

        $pesanan = new Pesanan;

        $pesanan -> mata_pelajaran = $request -> matapelajaran;
        $pesanan -> durasi = $request -> durasi;
        $pesanan -> pesan = $request -> pesan;
        $pesanan -> alamat = $request -> alamat;
        $pesanan -> provinsi = $request -> provinsi;
        $pesanan -> kota = $request -> kota;
        $pesanan -> kecamatan = $request -> kecamatan;
        $pesanan -> total = $request -> total;
        $pesanan -> buka_kelas_id = $request -> buka_kelas_id;
        $pesanan -> kode_invoice = $nomoriv;
        $pesanan -> user_id = $user_id;
        $pesanan -> status = "waiting";

        $pesanan -> save();

        // update jadwal field
        foreach ($request->jadwal as $index => $value) {
            
            $jadwal = Jadwal::find($value);
            // dd($value);
            $jadwal -> pesanan_id = $pesanan->id;
            $jadwal -> save();
        }
        // end

        return redirect() -> route('dashboard');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actionSnapToken()
    {
        //
        
        $id_pesanan = $this->request->id_pesanan;

        $pesan = DB::table('pesanans')
        ->select('pesanans.id as id','kode_invoice','status','name','email','reviewed','total','telp')
        ->join('users', 'pesanans.user_id', '=','users.id')
        ->join('murids', 'users.id', '=','murids.user_id')
        ->where('pesanans.id', '=', $id_pesanan)
        ->first();  

        $user_id = Auth::id();

        \DB::transaction(function() use($pesan){

            //save order detail
            $data = array();
            $items = array();

            // $items[] = array(
            //     'id'   => $pesan -> kode_invoice,
            //     'name' => $pesan->mata_pelajaran,
            //     'price'=> $pesan -> total,
            //     'quantity'=> "22",
            // );

            $transaction_details = array(
                'order_id'      => $pesan -> kode_invoice,
                'gross_amount'  => $pesan -> total
            );

            
            // Populate customer's Info
            $customer_details = array(
                'first_name'    => $pesan -> name,
                    'email'         => $pesan -> email,
                    'phone'         => $pesan -> telp
                );
            // Data yang akan dikirim untuk request redirect_url.
            $transaction_data = array(
                'transaction_details'=> $transaction_details,
                // 'item_details'=> $items,
                'customer_details'   => $customer_details
            );

            $snapToken = Veritrans_Snap::getSnapToken($transaction_data);
            // $invoice->snap_token = $snapToken;
            // $invoice->save();
            
            // Beri response snap token
            $this->response['snap_token'] = $snapToken;

        });

        return response()->json($this->response);
        

    }
}
