@extends('guru.layouts.app')


@section('content')
    <section id="formKelas">
        <div class="container">
            <div class="shadow">
                <div class="card pesan">
                    <div class="bg-img">
                    <div style="padding-top: 15px; text-align: center">
                        <h3>Detail Buka Kelas</h3>
                        <label>Isi formulir berikut ini dengan lengkap dan seksama untuk melengkapi prosedur untuk membuka kelas anda</label>
                    </div>

                <form id="msform" role="form" method="POST" action="{{ route('postbukakelas') }}">
                @csrf

                    <fieldset>
                        <div class="form-group">
                            <label for="tingkatPendidikan">Tingkat Pendidikan</label>
                            <select name="tingkat_pendidikan" class="form-control" id="tingkatPendidikan">
                                <option value="" selected disabled>Pilih Tingkat Pendidikan</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelasPendidikan">Pilih Kelas</label>
                            <select name="kelas_pendidikan" class="form-control" id="kelasPendidikan">
                                <option value="" selected disabled>Pilih Kelas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mataPelajaran">Mata Pelajaran</label>
                            <select name="mata_pelajaran" class="form-control" id="mataPelajaran">
                                <option value="" selected disabled>Pilih Mata Pelajaran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hargaPerPertemuan">Biaya per Pertemuan</label>
                            <input name="biaya" type="text" class="form-control"  placeholder="Masukan Biaya">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" id="tambah">Tambah Jadwal</button>
                                    <button type="button" class="btn btn-primary" id="kurang">Kurang Jadwal</button>
                                </div>
                            </div>
                            <small class="form-text text-muted">Keterangan : Jadwal maksimal yang dapat dimasukan adalah 4.</small>
                        </div>

                        
                        <div class="form-group" id="jadwal1">
                            <div class="row">
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Hari</label>
                                {{-- <input name="hari1" type="text" class="form-control"  placeholder="Masukan Hari"> --}}
                                <select name="hari[]" type="text" class="form-control" >
                                    <option selected disabled>Masukkan Hari</option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                <select>
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                            <input name="jam[]" type="text" name="date" class="form-control" placeholder="Pilih...">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        <div class="form-group" id="jadwal2">
                            <div class="row">
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Hari</label>
                                <select name="hari[]" type="text" class="form-control" >
                                    <option selected disabled>Masukkan Hari</option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                <select>
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                    <input name="jam[]" type="text" name="date" class="form-control" placeholder="Pilih...">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group" id="jadwal3">
                            <div class="row">
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Hari</label>
                                <select name="hari[]" type="text" class="form-control" >
                                    <option selected disabled>Masukkan Hari</option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                <select>
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                    <input name="jam[]" type="text" name="date" class="form-control" placeholder="Pilih...">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group" id="jadwal4">
                            <div class="row">
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Hari</label>
                                <select name="hari[]" type="text" class="form-control" >
                                    <option selected disabled>Masukkan Hari</option>
                                    <option>Senin</option>
                                    <option>Selasa</option>
                                    <option>Rabu</option>
                                    <option>Kamis</option>
                                    <option>Jum'at</option>
                                    <option>Sabtu</option>
                                    <option>Minggu</option>
                                <select>
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                    <input name="jam[]" type="text" name="date" class="form-control" placeholder="Pilih...">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection


@section('js')
  <!-- Script tambah jadwal -->
  
  <!-- Script untuk tambah jadwal pada tambah kelas -->
  <script type="text/javascript">
      var point = 1;

      // Inisialisasi yang sembunyi !
      $("#jadwal2").hide();
      $("#jadwal3").hide();
      $("#jadwal4").hide();
      
      $("#tambah").click(function(){
        if(point <= 4){
            point++;
            $("#jadwal"+point).show();
            console.log(point);
          }
      });

      $("#kurang").click(function(){
        if(point != 1){
            point--;
            $("#jadwal"+(point + 1)).hide();
            console.log(point);
          }
      });
  </script>

    <!-- Membuat dropdown untuk mata pelajaran -->
  <script type="text/javascript">
    $(document).ready(function(){
        $('#tingkatPendidikan').change(function(){
        var tingkatPendidikan = $('#tingkatPendidikan').val();

        // Mata Pelajaran
        var listmapelSdSmp = ['Bahasa Indonesia','Bahasa Inggris','Matematika','IPA','IPS','Agama'];
        var listmapelSma = ['Agama','Bahasa Indonesia','Bahasa Inggris','Biologi','Fisika','Kimia','Geografi','Ekonomi','Matematika'];
        console.log(tingkatPendidikan);

        // Kelas
        var listkelasSd = [1,2,3,4,5,6];
        var listkelasSmpSma = [1,2,3];

        if(tingkatPendidikan === 'sd'){
            $.each(listmapelSdSmp, function(i, p) {
                $('#mataPelajaran').append($('<option></option>').val(p).html(p));
            });

            $.each(listkelasSd, function(i, p){
                $('#kelasPendidikan').append($('<option></option>').val(p).html(p));
            });
        }
        else if(tingkatPendidikan === 'smp'){
            $('#mataPelajaran').empty();
            $('#mataPelajaran').append($('<option>Pilih Mata Pelajaran</option>'));
            $.each(listmapelSdSmp, function(i, p) {
                $('#mataPelajaran').append($('<option></option>').val(p).html(p));
            });

            $('#kelasPendidikan').empty();
            $('#kelasPendidikan').append($('<option>Pilih Kelas</option>'));
            $.each(listkelasSmpSma, function(i, p){
                $('#kelasPendidikan').append($('<option></option>').val(p).html(p));
            });  
        }
        else {
            $('#mataPelajaran').empty();
            $('#mataPelajaran').append($('<option>Pilih Mata Pelajaran</option>'));
            $.each(listmapelSma, function(i, p) {
                $('#mataPelajaran').append($('<option></option>').val(p).html(p));
            });

            $('#kelasPendidikan').empty();
            $('#kelasPendidikan').append($('<option>Pilih Kelas</option>'));
            $.each(listkelasSmpSma, function(i, p){
                $('#kelasPendidikan').append($('<option></option>').val(p).html(p));
            });  
        }
        });
    });
   </script>
@endsection