@extends('halamanMurid.app')

@section('content')
    <!-- Detail Pemesanan Guru -->
    <section id="intro">
        <div class="container">
            <div class="shadow">
            <div class="card-pesan">
                <div class="bg-img">
                    <center style="padding-top: 15px;">
                        <h3>Detail Pesan Guru</h3>
                        <label>Isi formulir berikut ini dengan lengkap dan seksama untuk melengkapi prosedur pemesanan guru privat anda</label>
                    </center>
                    <!-- Form -->
                <!-- multistep form -->
                <form id="msform">

                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Account Setup</li>
                    <li>Social Profiles</li>
                    <li>Personal Details</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title"></h2>
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
                    <div class="form-group">
                            <label for="comboBoxMapel" style="float:left;">Mata Pelajaran *</label>
                            <select class="form-control">
                                <option value="" selected disabled>Pilih Mata pelajaran</option>
                                <option value="">IPA SD</option>
                                <option value="">IPS SD</option>
                            </select>
                     </div>
                     <div class="row">
                            <div class="col col-lg-6">
                                <label for="comboBoxMapel" style="float:left;">Durasi Per Pertemuan *</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih Mata pelajaran</option>
                                    <option value="">IPA SD</option>
                                    <option value="">IPS SD</option>
                                </select>
                            </div>
                            <div class="col col-lg-6">
                                <label for="comboBoxMapel" style="float:left;">Jumlah Pertemuan minimal 8 *</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih Mata pelajaran</option>
                                    <option value="">IPA SD</option>
                                    <option value="">IPS SD</option>
                                </select>
                            </div>
                        </div><br/>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" style="float:left;">Pesan Untuk Pengajar</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                        <label style="float:left;">* Wajib Diisi</label><br/>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Tentukan Waktu</h2>
                    <div class="form-group">
                        <label for="labelDate" style="float:left;">Tentukan Hari Pertama Belajar*</label>
                        <input type="date" name="datePicker" placeholder="DD-MM-YYYY" />
                    </div>
                    <div class="row">
                            <div class="col col-lg-6">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Hari*</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih Hari</option>
                                    <option value="">IPA SD</option>
                                    <option value="">IPS SD</option>
                                </select>
                            </div>
                            <div class="col col-lg-6">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Waktu*</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih Waktu</option>
                                    <option value="">IPA SD</option>
                                    <option value="">IPS SD</option>
                                </select>
                            </div>
                        </div><br/>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Tentukan Lokasi</h2>
                    <div class="form-group">
                    <label for="alamat Lengkap" style="float:left;">Alamat Lengkap*</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat Lengkap Anda"></textarea>
                </div>
                <div class="row">
                        <div class="col col-lg-6">
                            <label for="comboBoxMapel" style="float:left;">Provinsi*</label>
                            <select class="form-control">
                                <option value="" selected disabled>Pilih Provinsi</option>
                                <option value="">DKI JAKARTA</option>
                                <option value="">JAWA BARAT</option>
                            </select>
                        </div>
                        <div class="col col-lg-6">
                            <label for="comboBoxMapel" style="float:left;">Kota*</label>
                            <select class="form-control">
                                <option value="" selected disabled>Pilih Kota</option>
                                <option value="">SEMARANG</option>
                                <option value="">SURABAYA</option>
                            </select>
                        </div>
                    </div><br/>
                    <div class="form-group">
                        <label for="comboBoxMapel" style="float:left;">Kecamatan*</label>
                            <select class="form-control">
                                <option value="" selected disabled>Pilih Waktu</option>
                                <option value="">Semarang Timur</option>
                                <option value="">Semarang Barat</option>
                            </select>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
                </form>
            <br/><br/>
    </section>
@endsection
