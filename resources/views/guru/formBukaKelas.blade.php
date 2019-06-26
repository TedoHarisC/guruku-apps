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

                <form id="msform">
                    <fieldset>
                        <div class="form-group">
                            <label for="tingkatPendidikan">Tingkat Pendidikan</label>
                            <select class="form-control" id="tingkatPendidikan">
                                <option value="" selected disabled>Pilih Tingkat Pendidikan</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mataPelajaran">Mata Pelajaran</label>
                            <select class="form-control" id="mataPelajaran">
                                <option value="" selected disabled>Pilih Mata Pelajaran</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hargaPerPertemuan">Biaya per Pertemuan</label>
                            <input type="text" class="form-control"  placeholder="Masukan Biaya">
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
                                <input type="text" class="form-control"  placeholder="Masukan Hari">
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                            <input type="text" name="date" class="form-control" placeholder="Pilih...">
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
                                <input type="text" class="form-control"  placeholder="Masukan Hari">
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                            <input type="text" name="date" class="form-control" placeholder="Pilih...">
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
                                <input type="text" class="form-control"  placeholder="Masukan Hari">
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                            <input type="text" name="date" class="form-control" placeholder="Pilih...">
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
                                <input type="text" class="form-control"  placeholder="Masukan Hari">
                            </div>
                            <div class="col-md-6">
                                <label for="jadwalPertemuan">Jam</label>
                                <div class="input-group clockpicker" data-align="top" data-autoclose="true">
                                            <input type="text" name="date" class="form-control" placeholder="Pilih...">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-time"></span>
                                        </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection