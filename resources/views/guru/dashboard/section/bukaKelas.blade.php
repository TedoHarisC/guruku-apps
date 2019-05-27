<section id="bukaKelas">
      <div class="container">
        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="{{ asset('landing') }}/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Mulai Karir Anda sebagai tenaga pengajar di GuruKU Apps</h4>
            <p>
              Bergabung menjadi bagian dari kami ! , banyak benefits yang akan di dapatkan . Seperti uang jutaan rupiah , serta bonus dan benefits lainnya. Dijamin anda akan terbantu
            </p>
            <p>
              Klik tombol di bawah ini untuk membuka kelas anda.
            </p>
            <p>
            <div class="text-center">
                <button type="button" class="pelajari" title="Pelajari Selengkapnya" data-toggle="modal" data-target="#exampleModal">Buka Kelas Sekarang</button>
            </div>
            </p>
          </div>
        </div>
      </div>

      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Membuka Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="mataPelajaran">Mata Pelajaran</label>
                    <input type="text" class="form-control"  placeholder="Masukan Mata Pelajaran">
                </div>
                <div class="form-group">
                    <label for="jadwalPertemuan">Jadwal Pertemuan</label>
                    <input type="text" class="form-control"  placeholder="Masukan Jadwal">
                </div>
                <div class="form-group">
                    <label for="hargaPerPertemuan">Harga per Pertemuan</label>
                    <input type="text" class="form-control"  placeholder="Masukan Harga">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
  </div>
</div>
</section>