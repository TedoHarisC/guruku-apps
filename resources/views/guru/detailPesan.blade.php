@extends('murid.layouts.app')

@section('content')
    <section id="intro">
        <div class="container">
            <div class="shadow">
                <div class="card-pesan" style="height: 830px; margin-bottom: 40px;">
                    <h2 style="text-align: center; padding: 20px;">Detail Murid yang memesan</h2>
                    <section class="content content_content" style="width: 100%; ">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row" style="padding-bottom: 0">
                            <div class="col-md-8">
                                <h1>GuruKu</h1>
                            </div>
                            <div class="col-md-4">
                                <h3 style="float: left">Date: 2019/01/01</h3>
                            </div>
                        </div>
                        <hr/>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-md-4">
                                <img src="{{ asset('landing') }}/img/sd.jpeg" class="profile-img" style="width: 200px;">
                            </div>
                            <div class="col-md-4">
                                <strong>Data Diri :</strong> 
                                <div>
                                    Nama : Dio Jotaro<br>
                                    Mata Pelajaran : Matematika<br>
                                    Durasi per Pertemuan : 1,5 Jam<br>
                                    Alamat : Jl Bugangan Gg 0 RT 06 RW 01 No.68<br>
                                    Kecamatan : Semarang Timur<br>
                                    Kota : Semarang<br>
                                    Provinsi : Jawa Tengah<br>                                
                                </div>
                            </div><!-- /.col -->
                            <div class="col-md-4">
                                <b>Invoice #007612</b><br>
                                <br>
                                <b>Order ID:</b> 4F3S8J<br>
                                <b>Persetujuan Terakhir : </b> 01/07/2019<br>
                                <b>Account ID:</b> 968-34567
                            </div><!-- /.col -->
                        </div><br/><br/><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped"  style="background-color: white;">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Hari</td>
                                            <td>Waktu</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>Senin</td>
                                            <td>10:00</td>
                                        </tr>

                                        <tr>
                                            <td scope="row">2</td>
                                            <td>Selasa</td>
                                            <td>12:00</td>
                                        </tr>

                                        <tr>
                                            <td scope="row">3</td>
                                            <td>Rabu</td>
                                            <td>20:00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row --><br/>

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <p><b>Amount Due 2/22/2014</b></p>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-md-6">
                                <button class="btn-get-accepted">
                                    <i class="fa fa-check"></i> Terima Pesanan
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn-get-decline">
                                    <i class="fa fa-times"></i> Tolak Pesanan
                                </button>
                            </div>
                        </div>
                    </section>
                </section>
                </div>
            </div>
        </div>
    </section>
@endsection