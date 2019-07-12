@extends('murid.layouts.app')

@section('content')
    <!-- Halaman Nav (Sorting) -->
    @include('murid.cariGuru.section.navigation')
    <!-- Halaman Searching Guru -->
    @include('murid.cariGuru.section.listGuru')
@endsection

@push('js')
<!-- Code for filter -->
    <script type="text/javascript">

      $('#inputStudi').change(function(){  
        var value_studi = $('#inputStudi').val();
        console.log(value_studi);  

        var listmapelSdSmp = ['Bahasa Indonesia','Bahasa Inggris','Matematika','IPA','IPS','Agama'];
        var listmapelSma = ['Agama','Bahasa Indonesia','Bahasa Inggris','Biologi','Fisika','Kimia','Geografi','Ekonomi','Matematika'];

        if(value_studi === 'SD'){
            $.each(listmapelSdSmp, function(i, p) {
                $('#mataPelajaran').append($('<option class="filter"></option>').val(p).html(p));
            });
        }
        else if(value_studi === 'SMP'){
            $('#mataPelajaran').empty();
            $('#mataPelajaran').append($('<option class="filter" value="semua" selected>Pilih Mata Pelajaran</option>'))
            $.each(listmapelSdSmp, function(i, p) {
                $('#mataPelajaran').append($('<option class="filter"></option>').val(p).html(p));
            });  
        }
        else if(value_studi === 'SMA'){
            $('#mataPelajaran').empty();
            $('#mataPelajaran').append($('<option class="filter" value="semua" selected>Pilih Mata Pelajaran</option>'))
            $.each(listmapelSma, function(i, p) {
                $('#mataPelajaran').append($('<option class="filter"></option>').val(p).html(p));
            });  
        }
      });

      // Untuk range harga
      $("#inputHarga").ionRangeSlider({
        type: "single",
        skin: "round",
        step: 50000,
        min: 100000,
        max: 1000000,
        from: 100000,
        grid: true,
        from_shadow: true
      });
    
      var options = {
          valueNames: [ 'name', 'studi', 'kota', 'mapel', 'harga' ]
      };
      var guruList = new List('gurus', options); 

      function updateList(){
          var value_studi = $("#inputStudi").val();
          var value_kota = $('#inputKota').val();
          var value_mapel = $('#mataPelajaran').val();
          var value_harga = $('#inputHarga').val();

          guruList.filter(function (item) {
              var studiFilter = false;
              var kotaFilter = false;
              var mapelFilter = false;
              var hargaFilter = false;

              if(value_studi == "semua")
              {
                studiFilter = true;
              }
              else
              {
                studiFilter = item.values().studi == value_studi;
              }

              if(value_kota == "semua")
              {
                  kotaFilter = true;
              } else {
                  kotaFilter = item.values().kota == value_kota;
              }

              if(value_mapel == "semua")
              {
                mapelFilter = true;
              }
              else
              {
                mapelFilter = item.values().mapel == value_mapel;
              }

              if(value_harga == "100000")
              {
                hargaFilter = true;
              }
              else
              {
                hargaFilter = item.values().harga == value_harga;
              }
            
              return studiFilter && kotaFilter && mapelFilter && hargaFilter
          });

          guruList.update();
      } 

      $(function(){
        $("#inputStudi").change(updateList);
        $("#inputKota").change(updateList);
        $("#mataPelajaran").change(updateList);
        $("#inputHarga").change(updateList);
      });
 
    </script>
@endpush