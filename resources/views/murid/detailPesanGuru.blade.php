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
                <form method="POST" action="{{route('pesananstore')}}" id="msform">
                @csrf

                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Account Setup</li>
                    <li>Social Profiles</li>
                    <li>Personal Details</li>
                </ul>
                <!-- fieldsets -->

                <!-- Tab 1 -->
                <fieldset>
                    <h2 class="fs-title"></h2>
                    <div class="fs-type">
                        <div class="row">
                            <div class="col col-md-1">
                                <img src="{{ asset($bukakelas->foto) }}" class="profile-img" style="width: 120px;">
                            </div>
                            <div class="col col-md-11">
                                <div class="fs-label-type">
                                    <h4>{{$bukakelas->name}}</h4>
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
                                    <input type="text" name="mata_pelajaran" class="form-control" value="{{$bukakelas->mata_pelajaran}}" disabled />
                                    <input type="hidden" name="matapelajaran" class="form-control" value="{{$bukakelas->mata_pelajaran}}"/>
                            </div>
                            <div class="col col-lg-6">
                                <label for="comboBoxMapel" style="float:left;">Durasi Per Pertemuan *</label>
                                <select name="durasi" class="form-control" required>
                                    <option value="" selected disabled>Pilih...</option>
                                    <option value="1">1 jam</option>
                                    <option value="1.5">1,5 jam</option>
                                    <option value="2">2 jam</option>
                                    <option value="2.5">2,5 jam</option>
                                    <option value="3">3 jam</option>
                                </select>
                            </div>
                        </div><br/>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" style="float:left;">Pesan Untuk Pengajar</label>
                            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Optional"></textarea>
                        </div>
                        <label style="float:left;">* Wajib Diisi</label><br/>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <!-- Tab 2 -->
                <fieldset>
                    <h2 class="fs-title">Tentukan Waktu</h2>
                    <!-- <div class="row">
                        <div class="col col-lg-4">
                            <div class="button" id="tambah">
                                <i class="fa fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="form1">
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Tentukan Hari*</label>
                                <select onchange="setJamValue(this.value)" name="hari[]" class="form-control">
                                    {{-- <option value="" selected disabled>Pilih...</option> --}}
                                    @foreach ($jadwals as $jadwal)
                                        <option value="{{$jadwal->hari}}|{{$jadwal->jam}}">{{$jadwal->hari}}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="col col-lg-5">
                                <label for="comboBoxMapel" style="float:left;">Waktu Pertemuan*</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
	                                <input type="text" name="jam[]" id="jam" class="form-control" value="{{$jadwal->jam}}" disabled>
	                            <span class="input-group-addon">
		                            <span class="glyphicon glyphicon-time"></span>
	                            </span>
                                </div>
                            </div>
                            
                             <div class="col col-lg-2">
                                <br/>
                                <div class="button" id="kurang1">
                                    <i class="button fa fa-minus" id="kurang1"></i>
                                </div>
                            </div>

                    </div> -->
                    <table class="table table-borderless table-sm m-0">
                        <thead class="">
                            <tr>
                                <td>#</td>
                                <td>Hari</td>
                                <td>Jam</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">
                                    <span class="checkbox">
                                    <svg id="i-checkmark" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="10.9375%">
                                        <path d="M2 20 L12 28 30 4" />
                                    </svg>
                                    </span>
                                </td>
                                <td>John Lilki</td>
                                <td>September 14, 2013</td>
                            </tr>
                                    <tr>
                                        <td>
                                            <span class="checkbox">
                                            <svg id="i-checkmark" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="10.9375%">
                                                <path d="M2 20 L12 28 30 4" />
                                            </svg>
                                            </span>
                                        </td>
                                        <td>John Lilki</td>
                                        <td>September 14, 2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <span class="checkbox">
                                            <svg id="i-checkmark" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="10.9375%">
                                                <path d="M2 20 L12 28 30 4" />
                                            </svg>
                                            </span>
                                        </td>
                                        <td>John Lilki</td>
                                        <td>September 14, 2013</td>
                                    </tr>
                                </tbody>
                            </table>
                    <!-- </div> -->
                    <br/>
                    
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <!-- Tab 3 -->
                <fieldset>
                    <h2 class="fs-title">Tentukan Lokasi</h2>
                    <div class="form-group">
                    <label for="alamat Lengkap" style="float:left;">Alamat Lengkap*</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat Lengkap Anda" required></textarea>
                </div>
                <div class="row">
                        <div class="col col-lg-6">
                            <label for="comboBoxMapel" style="float:left;">Provinsi*</label>
                            <select name="provinsi" class="form-control"  id="province"  onchange="showCity()">
                                <option value="" selected disabled>Pilih Provinsi</option>
                                @foreach ($provinces as $item):
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col col-lg-6">
                            <label for="comboBoxMapel" style="float:left;">Kota*</label>
                            <select class="form-control" id="city" name="kota" onchange="showDistrict()">
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
                    <input type="hidden" name="buka_kelas_id" class="submit action-button" value="{{$bukakelas->id}}"/>
                    <input type="hidden" name="total" class="submit action-button" value="{{$bukakelas->biaya}}"/>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
                </form>
            <br/><br/>
    </section>

    <script>
    function setJamValue(val) {
        
        var explode = val.split('|');
        
        var jam = explode[1];

        console.log(index);


        document.getElementById('jam').value=jam ; 

    }
    </script>

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


@push('js')
    <!-- Script for Multitab Table -->
  <script type="text/javascript">
      //jQuery time
      var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

      $(".next").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
              'transform': 'scale('+scale+')',
              'position': 'absolute'
            });
            next_fs.css({'left': left, 'opacity': opacity});
          },
          duration: 800,
          complete: function(){
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack'
        });
      });

      $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
          step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'position': 'absolute', 'opacity': opacity});
          },
          duration: 800,
          complete: function(){
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack'
        });
      });

      //$(".submit").click(function(){
       // return false;
      //})

    </script>

    <!-- Script untuk menambah form di part 2 -->
    <script type="text/javascript">

    $(document).ready(function(){
    var maxField = <?php echo count($jadwals);?>; //Input fields increment limitation
    console.log(maxField);
    var addButton = $('#tambah'); //Add button selector
    var wrapper = $('#form1'); //Input field wrapper
    
    // var fieldHTML2 = ''                        
    // var fieldHTML3 = ''
     //Initial field counter is 1
    var x = 1;
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields

        
        if(x < maxField){ 
            x++; //Increment field counter
            console.log(x);
            var fieldHTML = 
            '<div class="col col-lg-5"><label for="comboBoxMapel" style="float:left;">Tentukan Hari*</label><select onchange="setJamValue(this.value)" class="form-control"><option value="" selected disabled>Pilih...</option>@foreach($jadwals as $jadwal)  <option value="{{$jadwal->hari}}|{{$jadwal->jam}}">{{$jadwal->hari}}</option>@endforeach</select></div><div class="col col-lg-5"><label for="comboBoxMapel" style="float:left;">Tentukan Waktu Pertemuan Pertama*</label><div class="input-group clockpicker" data-align="top" data-autoclose="true"><input type="text" name="date" class="form-control" value="'+x+'"><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span></div></div><i class="button fa fa-minus" id="kurang1"></i>';
            $(wrapper).append(fieldHTML);
            // $(wrapper).append(fieldHTML2);
            // $(wrapper).append(fieldHTML3);
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '#kurang1', function(e){
        e.preventDefault();
        var total_fields = wrapper[0].childNodes.length;
	    if(total_fields>1){
		    wrapper[0].childNodes[total_fields-1].remove();
            wrapper[0].childNodes[total_fields-2].remove();
            wrapper[0].childNodes[total_fields-3].remove();
	    }
        x--; //Decrement field counter
    });
});
    </script>

    <!-- Script untuk checklist di halaman 2 -->
    <script type="text/javascript">
        $('.checkbox').click(function(){
            if ($(this).hasClass('positive')){
                $(this).removeClass('positive');
                $(this).html('');
            } else {
                $(this).addClass('positive');
                $(this).html('<svg id="i-checkmark" viewBox="0 0 32 32" width="18" height="18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="10.9375%"><path d="M2 20 L12 28 30 4" /></svg>');
            }
});
    </script>
@endpush
