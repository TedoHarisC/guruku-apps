<section id="bukaKelas">
      <div class="container">
        <div class="row about-extra">
          <div class="alert alert-danger alert-dismissible show wow fadeInUp" role="alert">
            <a href="{{route('guruprofile')}}" class="alert-link">Silahkan lengkapi data diri anda pada halaman profil, untuk melakukan proses selanjutnya</a>
            {{--   --}}
            </button>
          </div>
        </div>
      </div>
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
              <a href="{{route('bukakelas')}}"><button type="button" class="pelajari" title="Pelajari Selengkapnya">Buka Kelas Sekarang</button></a>
            </div>
            </p>
          </div>
        </div>
      </div>
</section>

@push('js')

  
@endpush