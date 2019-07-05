@extends('murid.layouts.app')

@section('content')
    <!-- Detail Pemesanan Guru -->
    <section id="intro">
        <div class="container">
            <div class="shadow">
            <div class="card-pesan">
                <div class="bg-img">
                    <div style="padding-top: 15px; text-align:center">
                        <h3>Detail Pesan Guru</h3>
                        <label>Isi formulir berikut ini dengan lengkap dan seksama untuk melengkapi prosedur pemesanan guru privat anda</label>
                    </div>
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
                     <div class="row">
                            <div class="col col-lg-6">
                                    <label for="comboBoxMapel" style="float:left;">Mata Pelajaran *</label>
                                    <input type="text" name="mataPelajaran" class="form-control" value="Matematika" disabled />
                            </div>
                            <div class="col col-lg-6">
                                <label for="comboBoxMapel" style="float:left;">Durasi Per Pertemuan *</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih...</option>
                                    <option value="">1 jam</option>
                                    <option value="">1,5 jam</option>
                                    <option value="">2 jam</option>
                                    <option value="">2,5 jam</option>
                                    <option value="">3 jam</option>
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
                    <div class="row">
                        <div class="col col-lg-4">
                            <div class="button" id="tambah">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="form1">
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Hari*</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih...</option>
                                    <option value="">Senin</option>
                                    <option value="">Selasa</option>
                                    <option value="">Rabu</option>
                                    <option value="">Kamis</option>
                                    <option value="">Jumat</option>
                                    <option value="">Sabtu</option>
                                    <option value="">Minggu</option>
                                </select>
                            </div>
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Waktu Pertemuan Pertama*</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
	                                <input type="text" name="date" class="form-control" value="Pilih...">
	                            <span class="input-group-addon">
		                            <span class="glyphicon glyphicon-time"></span>
	                            </span>
                                </div>
                            </div>
                            <div class="col col-lg-2">
                                <br/>
                                <div class="button" id="kurang1" >
                                    <i class="fa fa-minus"></i>
                                </div>
                            </div>
                        </div><br/>

                        <div class="row" id="form2">
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Hari*</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih...</option>
                                    <option value="">Senin</option>
                                    <option value="">Selasa</option>
                                    <option value="">Rabu</option>
                                    <option value="">Kamis</option>
                                    <option value="">Jumat</option>
                                    <option value="">Sabtu</option>
                                    <option value="">Minggu</option>
                                </select>
                            </div>
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Waktu Pertemuan Pertama*</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
	                                <input type="text" name="date" class="form-control" value="Pilih...">
	                            <span class="input-group-addon">
		                            <span class="glyphicon glyphicon-time"></span>
	                            </span>
                                </div>
                            </div>
                            <div class="col col-lg-2">
                                <br/>
                                <div class="button" id="kurang2" >
                                    <i class="fa fa-minus"></i>
                                </div>
                            </div>
                        </div><br/>

                        <div class="row" id="form3">
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Hari*</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih...</option>
                                    <option value="">Senin</option>
                                    <option value="">Selasa</option>
                                    <option value="">Rabu</option>
                                    <option value="">Kamis</option>
                                    <option value="">Jumat</option>
                                    <option value="">Sabtu</option>
                                    <option value="">Minggu</option>
                                </select>
                            </div>
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Waktu Pertemuan Pertama*</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
	                                <input type="text" name="date" class="form-control" value="Pilih...">
	                            <span class="input-group-addon">
		                            <span class="glyphicon glyphicon-time"></span>
	                            </span>
                                </div>
                            </div>
                            <div class="col col-lg-2">
                                <br/>
                                <div class="button" id="kurang3" >
                                    <i class="fa fa-minus"></i>
                                </div>
                            </div>
                        </div><br/>

                        <div class="row" id="form4">
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Hari*</label>
                                <select class="form-control">
                                    <option value="" selected disabled>Pilih...</option>
                                    <option value="">Senin</option>
                                    <option value="">Selasa</option>
                                    <option value="">Rabu</option>
                                    <option value="">Kamis</option>
                                    <option value="">Jumat</option>
                                    <option value="">Sabtu</option>
                                    <option value="">Minggu</option>
                                </select>
                            </div>
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Waktu Pertemuan Pertama*</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
	                                <input type="text" name="date" class="form-control" value="Pilih...">
	                            <span class="input-group-addon">
		                            <span class="glyphicon glyphicon-time"></span>
	                            </span>
                                </div>
                            </div>
                            <div class="col col-lg-2">
                                <br/>
                                <div class="button" id="kurang4" >
                                    <i class="fa fa-minus"></i>
                                </div>
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
                            <select class="form-control"  id="province"  onchange="showCity()">
                                <option value="" selected disabled>Pilih Provinsi</option>
                                @foreach ($provinces as $item):
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col col-lg-6">
                            <label for="comboBoxMapel" style="float:left;">Kota*</label>
                            <select class="form-control" id="city" name="city" onchange="showDistrict()">
                                <option value="" selected disabled>Pilih Kota</option>
                            </select>
                        </div>
                    </div><br/>
                    <div class="form-group">
                        <label for="comboBoxMapel" style="float:left;">Kecamatan*</label>
                            <select class="form-control" id="kecamatan" name="kecamatan">
                                <option value="" selected disabled>Pilih Kecamatan</option>
                            </select>
                    </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
                </form>
            <br/><br/>
    </section>

    <script type="text/javascript">
    function showCity() {
        var city = $('#kabupaten').val();
        
        $('#province').change(function(){
            var province = $('#province').val();

            // mulai berubah
            $.post("{{ route('city')}}",
                {
                    _method: 'POST',
                    _token: '{{ csrf_token() }}',
                    idprov: province,            
                    success: function(result){
                        // coba dengan log (debugging)
                        console.log('my message ' + province);
                    }
                },
                function (data, status) {
                    var option = "";
                    $("#city").html(data);                  
                });
        });
    }

    function showDistrict(){
        var kecamatan = $('#kecamatan').val();
        
        $('#city').change(function(){
            var city = $('#city').val();

            // mulai 
            $.post("{{ route('kecamatan')}}",
                {
                    _method: 'POST',
                    _token: '{{ csrf_token() }}',
                    idcity: city,            
                    success: function(result){
                        // Debugging dengan log
                        console.log('my message city' + city);
                    }
                },
                function (data, status) {
                    var option = "";
                    $("#kecamatan").html(data);                  
                });
        });
    }
    </script>
@endsection
