@extends('murid.layouts.app')

@section('content')
    <section id="intro">
        <div class="container">
            <div class="shadow">
                <div class="card-pesan" style="height: 1160px;">
                    <div class="bg-img">
                        <div style="padding-top: 15px; text-align:center;">
                            <h3>Detail Pesanan Guru</h3>
                            <label>Berikut ini adalah detail pesanan guru anda</label>
                        </div>
                    </div>
                    <div id="msform" style="margin-left: 20px; margin-right: 20px; margin-top: 0;">
                        <div class="fs-type">
                        <div class="row">
                                <div class="col col-md-1">
                                    <img src="{{ asset('landing') }}/img/sd.jpeg" class="profile-img" style="width: 120px;">
                                </div>
                                <div class="col col-md-11">
                                    <div class="fs-label-type">
                                        <h4>Annisa</h4>
                                        <label>Rating :
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        4.7</label>
                                    </div>
                                </div>
                        </div>
                        </div><br/>
                        <!-- Next Line -->
                        <div class="row">
                            <div class="col col-lg-6">
                                    <h5 style="float:left;">Mata Pelajaran :</h5>
                                    <label style="float:left; padding-left: 10px; font-size: 19px">Matematika</label>
                            </div>
                            <div class="col col-lg-6">
                                <h5 style="float:left;">Durasi Per Pertemuan :</h5>
                                <label style="float:left; padding-left: 10px; font-size: 19px">1,5 Jam</label>
                            </div>
                        </div><br/>
                        <!-- Next Line -->
                        <div class="row">
                            <div class="col col-lg-12">
                                <h5 style="float:left;">Pesan untuk pengajar :</h5>
                                <textarea class="form-control" rows="4">Isi pesan untuk pengajar</textarea>
                            </div>
                        </div><br/>
                        <!-- Next Line -->
                        <div class="row">
                            <div class="col col-lg-12">
                                <h5 style="float:left;">Jadwal :</h5>
                                <table class="table" style="background-color: white;">
                                    <thead style="color: black">
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
                                        <td>Jumat</td>
                                        <td>20:00</td>
                                        </tr>
                                        <tr>
                                        <td scope="row">3</td>
                                        <td>Sabtu</td>
                                        <td>08:00</td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>
                        </div><br/>
                        <!-- Next Line -->
                        <div class="row">
                            <div class="col col-lg-12">
                                <h5 style="float:left;">Alamat Lengkap :</h5>
                                <textarea class="form-control" rows="4">Ini Alamat Lengkap saya</textarea>
                            </div>
                        </div><br/>
                        <!-- Next Line -->
                        <div class="row">
                            <div class="col col-lg-4">
                                    <h5 style="float:left;">Provinsi :</h5>
                                    <label style="float:left; padding-left: 10px; font-size: 19px">Jawa Tengah</label>
                            </div>
                            <div class="col col-lg-4">
                                <h5 style="float:left;">Kota :</h5>
                                <label style="float:left; padding-left: 10px; font-size: 19px">Semarang</label>
                            </div>
                            <div class="col col-lg-4">
                                <h5 style="float:left;">Kecamatan :</h5>
                                <label style="float:left; padding-left: 10px; font-size: 19px">Semarang Timur</label>
                            </div>
                        </div><br/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection